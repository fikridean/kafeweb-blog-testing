@extends('layouts.main')

@section('container')

  <img src="{{ asset($user->image) }}" alt="{{ $user->name }}" class="rounded-circle shadow-lg" style="width: 200px; height: 200px">

  <div class="row">
    <div class="col-xl-12">

      <div class="card bg-light text-dark mt-4 border border-0">
        <div class="card-header fw-semibold border border-0">
          @<span></span>{{ $user->username }}
        </div>

        <div class="card-body border border-0">
          <h3 class="card-title">{{ $user->name }}</h3>
          <p class="card-text mt-3"><i class="bi bi-envelope-check-fill"></i> {{ $user->email }}</p>
          <p class="card-text">joined since {{ $user->created_at->diffForHumans() }}</p>
        </div>
      </div>

    </div>
  </div>
  
    
  
@endsection