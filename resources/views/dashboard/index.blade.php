  
@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3">
  <h1 class="h2 text-dark">Hello again, {{ auth()->user()->name }}</h1>
  <hr class="text-dark"/>
</div>
@endsection

