@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3">
  <h1 class="h2">Create Category</h1>
  <hr />

  <form action="/dashboard/categories" method="POST">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control text-light @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}" autofocus>
    </div>

    @error('name')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control text-light @error('slug') is-invalid @enderror" name="slug" id="slug" required value="{{ old('slug') }}">
    </div>

    @error('slug')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <button type="submit" class="btn btn-primary w-100">Create a Post</button>
  </form>
</div>

<script>
  const name = document.querySelector('#name');
  const slug = document.querySelector('#slug');

  name.addEventListener('keyup', function() {
    fetch('/dashboard/categories/slugify?name=' + name.value)
      .then(response => response.json())
      .then(response => slug.value = response['name'])
  })

  document.addEventListener("trix-file-accept", function(event) {
    event.preventDefault();
  });
</script>

@endsection



