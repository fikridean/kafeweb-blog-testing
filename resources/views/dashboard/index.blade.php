  
@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3">
  <h1 class="h2 text-dark">Hello again, {{ auth()->user()->name }}</h1>
  <hr class="text-dark"/>

  <div class="alert alert-danger fs-6" role="alert">
    We apologize in advance, This website cannot display uploaded photos due to some problems.
  </div>
</div>
@endsection

