@extends('layouts.main')

@section('container')
  <div class="row shadow-lg px-2 py-5 mt-5 bg-light" id="home-container">
    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center gap-5">
      <img src="{{ asset('img/KWtransparent.png') }}" alt="Kafe Web" class="w-50">
      <h1 class="display-6 fw-light text-dark">By</h1>
      <h1 class="display-6 text-dark">@<span></span>kafe.web</h1>
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center gap-5 h-100">
      <img src="{{ asset('img/formal1000.png') }}" alt="Fikri Dean Radityo" class="shadow-lg w-25 rounded-circle">
      <a href="https://fikridean.github.io/portfolio/" class="display-6 text-dark">Fikri Dean Radityo</a>
      <div class="d-flex flex-column gap-3">
        <a href="https://fikridean.github.io/portfolio" class="btn btn-danger">My Portfolio Website</a>
        <a href="https://www.linkedin.com/in/fikri-dean-radityo-23bb3621a/" class="btn btn-primary">My LinkedIn</a>
      </div>

    </div>
  </div>

@endsection