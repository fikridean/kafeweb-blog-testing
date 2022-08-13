@extends('layouts.main')

@section('container')
  <h1 class="text-dark">{{ $title }}</h1>

  <div class="row d-flex justify-content-center">
    @foreach ($categories as $category)
      <div class="col-lg-4 mt-4">
        <a href="/posts?category={{ $category->slug }}">
          <div class="card position-relative">
            <img src="https://source.unsplash.com/random/400x200/?{{ $category->name }}" alt="{{ $category->name }}">

            <div class="card-body d-flex position-absolute top-50 start-50 translate-middle" style="background-color: #002a5b51; color: #ffffff; width: 100%;">
              <h5>{{ $category->name }}</h5>
            </div>

            <span class="badge bg-primary position-absolute top-0 start-0 m-2">{{ $category->posts->count() }} Posts</span>
          </div>    
        </a>    
      </div>
    @endforeach
  </div>
  
    
  
@endsection