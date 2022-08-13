@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3">
  <h1 class="h2 text-dark">Edit Post</h1>
  <hr class="text-dark"/>

  <form action="/dashboard/posts/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf

    <div class="mb-3">
      <label for="title" class="form-label text-dark">Title</label>
      <input type="text" class="form-control bg-light text-dark @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title', $post->title) }}" autofocus>
    </div>

    @error('title')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="slug" class="form-label text-dark">Slug</label>
      <input type="text" class="form-control bg-light text-dark @error('slug') is-invalid @enderror" name="slug" id="slug" required value="{{ old('slug', $post->slug) }}">
    </div>

    @error('slug')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="category" class="form-label text-dark">Category</label>
      <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" required>
        <option selected>--Choose Category--</option>
        @foreach ($categories as $category)
          @if (old('category_id', $post->category->id) == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
          @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endif
        @endforeach
      
      </select>
    </div>

    @error('category_id')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="image" class="form-label text-dark">Post Cover</label>
      <input class="form-control bg-light text-dark @error('category_id') is-invalid @enderror" type="file" id="image" name="image">
    </div>

    @error('image')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="body" class="form-label text-dark">Body</label>

      @error('body')
        <div class="alert alert-danger p-0">
          {{ $message }}
        </div>
      @enderror

      <input id="body" type="hidden" name="body" required value="{{ old('body', $post->body) }}">
      <trix-editor class="text-dark" input="body"></trix-editor>
    </div>

    

    <button type="submit" class="btn btn-primary w-100">Create a Post</button>
  </form>
</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('keyup', function() {
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(response => slug.value = response['slug'])
  })

  document.addEventListener("trix-file-accept", function(event) {
    event.preventDefault();
  });
</script>

@endsection



