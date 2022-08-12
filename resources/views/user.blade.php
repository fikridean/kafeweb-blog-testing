@extends('layouts.main')

@section('container')

  <img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->name }}" class="rounded-circle shadow-lg" style="width: 200px; height: 200px">

  <div class="row">
    <div class="col-xl-12">

      <div class="card mt-4 bg-dark border border-0 text-light">
        <div class="card-header fw-semibold bg-dark border border-0 text-light">
          @<span></span>{{ $user->username }}
        </div>

        <div class="card-body bg-dark border border-0 text-light">
          <h3 class="card-title">{{ $user->name }}</h3>
          <p class="card-text mt-3"><i class="bi bi-envelope-check-fill"></i> {{ $user->email }}</p>
          <p class="card-text">joined since {{ $user->created_at->diffForHumans() }}</p>
        </div>
      </div>

    </div>
  </div>
  
    
  
@endsection