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
      <h1 class="display-6 text-light fw-light">By</h1>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 d-flex justify-content-center align-items-center mt-5">
      <h1 class="display-3 text-light">@<span></span>kafe.web</h1>
    </div>
  </div>


{{-- <script>
  const width = screen.width;
  const height = window.innerHeight;
  const homeContainer = document.querySelector("#home-container");
  homeContainer.style.height = height / 2 + 'px';

</script> --}}

@endsection