@extends('layouts.main')

@section('container')
  <div class="row" id="home-container">
    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center mt-5 gap-5">
      <img src="{{ asset('img/KWtransparent.png') }}" alt="Kafe Web" class="w-100">
      <h1 class="display-6 fw-light text-dark">By</h1>
      <h1 class="display-3 text-dark">@<span></span>kafe.web</h1>
    </div>
  </div>

@endsection