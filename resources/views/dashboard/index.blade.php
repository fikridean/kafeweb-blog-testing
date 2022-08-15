  
@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3">
  <h1 class="h2 text-dark">Hello again, {{ auth()->user()->name }}</h1>
  <hr class="text-dark"/>

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading"><i class="bi bi-check-circle-fill"></i> New Update!</h4>
    <hr>
    <p class="mb-0">Now, this website can display images to the public</p>
  </div>
</div>
@endsection

