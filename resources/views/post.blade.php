@extends('layouts.main')

@section('container')
  <h1 class="text-start mt-4 bg-dark text-light">{{ $post->title }}</h1>

  <div class="row mt-4">
    <div class="col-lg-8 d-flex flex-column justify-content-start text-start p-2 bg-dark text-light">

      @if ($post->image)
        <x-slot name="img">{{ asset('storage/' . $post->image) }}</x-slot>
      @else
        <x-slot name="img">https://source.unsplash.com/random/300x200/?{{ $post->category->name }}</x-slot>
      @endif
      
      <h6 class="mt-2">
        created by <a href="/users/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
      </h6>

      <p class="mt-4">{!! $post->body !!}</p>
    
    </div>

    {{-- comments --}}
    <div class="col-lg-4 rounded d-flex flex-column flex-wrap justify-content-start p-4 border border-1">
      <h5 class="bg-dark text-light">Comments</h5>

      <hr class="text-light">

      <form action="/comment" method="POST" class="d-flex justify-content-center align-items-center my-3">
        @csrf

        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <input type="hidden" name="post_slug" value="{{ $post->slug }}">

        <div class="form-floating mx-2 col-lg-8">
          <input type="text" class="form-control w-100 h-100" id="body" name="body" placeholder="name@example.com">
          <label for="body" class="d-flex">Add comment here</label>
        </div>
        
        @auth
          <button class="btn btn-primary mx-2 col-lg-4" type="submit">Add Comment</button>
        @else
          <a href="/login" class="btn btn-primary btn-sm mx-2 col-lg-4">Log in to comment!</a>
        @endauth
      </form>

      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-12" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <hr>

      @isset($comments)
        @foreach ($comments as $comment)
        <div class="card my-2 bg-dark text-light">
          <div class="card-body d-flex justify-content-start">
            <div class="mx-2">
              <img class="rounded-circle border border-1 p-1" src="" alt="Profile Photo" style="width: 40px; height:40px">
            </div>
            <div class="mx-2 d-flex flex-column align-items-start">
              <small class="text-muted">{{ $comment->user->name }} • {{ $comment->updated_at->diffForHumans() }}</small>
              <p class="p-0 m-0 text-start">{{ $comment->body }}</p>
              @if ($comment->created_at != $comment->updated_at)
                <small class="text-muted">Edited</small>  
              @endif
              @auth
                @if (auth()->user()->id === $comment->user->id)
                  <div class="d-flex mt-2">
                    <form action="/comment/{{ $comment->id }}" method="POST">
                      @csrf
                      @method('put')

                      <button type="submit" class="btn btn-warning btn-sm px-4"><i class="bi bi-pencil-square"></i></button>
                    </form>
                    <form action="/comment/{{ $comment->id }}" method="POST">
                      @csrf
                      @method('delete')

                      <button type="submit" class="btn btn-danger btn-sm px-4 ms-1"><i class="bi bi-x-circle-fill"></i></button>
                    </form>
                  </div>
                @endif
              @endauth
              
              </div>
            </div>
          </div>
        @endforeach
      @endisset
      
      
    </div>

  </div>
@endsection