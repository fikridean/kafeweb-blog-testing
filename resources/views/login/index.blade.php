@extends('layouts.main')

@section('container')

<main class="form-signin m-auto">
  <form>
    <h1 class="h3 mb-4 fw-normal">Please log in</h1>

    <form method="POST" action="{{ route('login.loginSubmit') }}">
      @csrf

      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <div class="form-floating my-3">
        <input type="email" class="form-control bg-dark text-light rounded-3 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required value="{{ old('email') }}">
        <label for="email" class="d-flex bg-transparent text-light">Email address</label>
      </div>

      @error('email')
        <div class="alert alert-danger p-0">
          {{ $message }}
        </div>
      @enderror
  
      <div class="form-floating my-3">
        <input type="password" class="form-control bg-dark text-light rounded-3 @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required>
        <label for="password" class="d-flex bg-transparent text-light">Password</label>
      </div>

      @error('password')
        <div class="alert alert-danger p-0">
          {{ $message }}
        </div>
      @enderror

      <button class="btn btn-secondary w-100" type="submit" formmethod="post">Log in</button>
    
    </form>

    <p class="mt-4 text-muted">&copy; 2022-2023</p>
  </form>
</main>

@endsection