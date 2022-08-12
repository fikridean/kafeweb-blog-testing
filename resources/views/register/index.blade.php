@extends('layouts.main')

@section('container')
<main class="form-signin m-auto">
  <form>
    <h1 class="h3 mb-4 fw-normal">Please sign up</h1>

    <form method="POST" action="{{ route('register.registerSubmit') }}">
      @csrf
      <div class="form-floating my-3">
        <input type="text" class="form-control bg-dark text-light rounded-3 @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" required value="{{ old('name') }}" autocomplete="off">
        <label for="name" class="d-flex bg-transparent text-light">Name</label>
      </div>

      @error('name')
        <div class="alert alert-danger p-0">
          {{ $message }}
        </div>
      @enderror

      <div class="form-floating my-3">
        <input type="text" class="form-control bg-dark text-light rounded-3 @error('username') is-invalid @enderror" id="username" placeholder="username" name="username" required value="{{ old('username') }}" autocomplete="off">
        <label for="username" class="d-flex bg-transparent text-light">Username</label>
      </div>

      @error('username')
        <div class="alert alert-danger p-0">
          {{ $message }}
        </div>
      @enderror

      <div class="form-floating my-3">
        <input type="email" class="form-control bg-dark text-light rounded-3 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required value="{{ old('email') }}" autocomplete="off">
        <label for="email" class="d-flex bg-transparent text-light">Email address</label>
      </div>

      @error('email')
        <div class="alert alert-danger p-0">
          {{ $message }}
        </div>
      @enderror
  
      <div class="form-floating my-3">
        <input type="password" class="form-control bg-dark text-light rounded-3 @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required autocomplete="off">
        <label for="password" class="d-flex bg-transparent text-light">Password</label>
      </div>

      @error('password')
        <div class="alert alert-danger p-0">
          {{ $message }}
        </div>
      @enderror

      <button class="btn btn-secondary w-100" type="submit" formmethod="post">Sign up</button>
    
    </form>

    <p class="mt-4 text-muted">&copy; 2022-2023</p>
  </form>
</main>
@endsection