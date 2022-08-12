  
@extends('dashboard.layouts.main')

@section('container')
<div class=" pt-3 pb-2 mb-3">
  <h1 class="h2">My Posts</h1>

  <hr />

  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  
  <a href="/dashboard/posts/create" class="btn btn-primary mb-4">Create Post</a>

  <div class="table-responsive col-lg-8">
    <table class="table table-sm">
      <thead>
        <tr class="bg-dark text-light">
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Last Updated</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr class="bg-dark text-light">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>{{ $post->updated_at }}</td>
            <td class="d-flex flex-wrap">
              <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-success btn-sm m-1"><span data-feather="info" class="align-text-bottom"></span></a>
              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm m-1"><span data-feather="edit" class="align-text-bottom"></span></a>
              <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
                @method('delete')
                @csrf

                <button type="submit" class="btn btn-danger btn-sm m-1"><span data-feather="trash-2" class="align-text-bottom"></span></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

