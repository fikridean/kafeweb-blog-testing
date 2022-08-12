@extends('layouts.main')

@section('container')
  <h1>Halaman About</h1>
  <h3>{{ $name }}</h3>
  <p>{{ $email }}</p>
  <img src="img/{{ $img }}" alt="{{ $name }}" class="figure-img img-fluid rounded shadow-lg" width="200px">
@endsection