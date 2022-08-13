@extends('layouts.main')

@section('container')
  <h1 class="text-dark">
    @if(request('category'))
      {{ $title }} in {{ request('category') }}
    @else
      {{ $title }}
    @endif
  </h1>

  <div class="row">
    <div class="col-lg-3 mt-3">
      <div class="dropdown">

        <a class="btn btn-primary dropdown-toggle" href="/posts" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          
          @if(request('category'))
            {{ request('category') }}
          @else
            All Category
          @endif

        </a>
      
        <ul class="dropdown-menu bg-light">
          @foreach ($categories as $category)
            <li><a class="dropdown-item text-dark {{ request('category') == $category->slug ? 'active' : '' }}" href="/posts?category={{ $category->slug }}">{{ $category->name }}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="col-lg-6 mt-3">
      <x-search></x-search>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      {{ $posts->links() }}
    </div>
  </div>

  <div class="row">

    
      @foreach ($posts as $post)
        @isset($post)
        <div class="col-lg-3 mt-4">
          <x-cardPosts>
            <x-slot name="title">{{ $post->title }}</x-slot>
            <x-slot name="slug">{{ $post->slug }}</x-slot>

            @if ($post->image)
              <x-slot name="img">{{ asset('storage/' . $post->image) }}</x-slot>
            @else
              <x-slot name="img">https://source.unsplash.com/random/300x200/?{{ $post->category->name }}</x-slot>
            @endif

            <x-slot name="author">{{ $post->user->username }}</x-slot>
            <x-slot name="category">{{ $post->category->name }}</x-slot>
            <x-slot name="categories">{{ $post->category->slug }}</x-slot>
            <x-slot name="excerpt">{{ $post->excerpt }}</x-slot>
          </x-cardPosts>
        </div>
        @endisset
      @endforeach
    
  </div>

  <div class="row mt-4">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      {{ $posts->links() }}
    </div>
  </div>
@endsection