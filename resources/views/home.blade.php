@extends('layouts.main')

@section('container')
  <div class="row" id="home-container">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 d-flex justify-content-center align-items-center mt-5">
      <img src="{{ asset('img/KWtransparent.png') }}" alt="Kafe Web" class="w-100">
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 d-flex justify-content-center align-items-center mt-5">
      <h1 class="display-6 fw-light text-dark">By</h1>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 d-flex justify-content-center align-items-center mt-5">
      <h1 class="display-3 text-dark">@<span></span>kafe.web</h1>
    </div>
  </div>

@endsection