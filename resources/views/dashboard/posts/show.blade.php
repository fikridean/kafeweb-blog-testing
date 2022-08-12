  
@extends('dashboard.layouts.main')

@section('container')
  <div class="mt-4 d-flex flex-row flex-wrap align-items-center">
    <a href="/dashboard/posts" class="btn btn-success btn-sm py-2 px-3 m-1"><span data-feather="arrow-left-circle" class="align-text-bottom"></span> Back</a>
    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm py-2 px-3 m-1"><span data-feather="edit" class="align-text-bottom"></span> Edit</a>
    <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
      @method('delete')
      @csrf

      <button type="submit" class="btn btn-danger btn-sm py-2 px-3 m-1"><span data-feather="trash-2" class="align-text-bottom"></span> Delete</button>
    </form>
  </div>

  <h1 class="text-start mt-4">{{ $post->title }}</h1>

  <div class="row mt-4">
    <div class="col-lg-12 d-flex flex-column justify-content-start text-start">
      @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded w-25" alt="...">
      @else
        <img src="https://source.unsplash.com/random/300x200/?person" class="img-fluid rounded w-25" alt="..."> 
      @endif
    
      <h6 class="mt-2">
        created by <a href="/users/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
      </h6>

      <p class="mt-4">{!! $post->body !!}</p>
    
    </div>

@endsection

