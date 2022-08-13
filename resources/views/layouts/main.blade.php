<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STEP | {{ $title }}</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    {{-- Login --}}
    <link href="css/signin.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/dark-mode.css') }}">

    {{-- Owned Style --}}
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <x-navbar>
      <x-slot name="title">
        {{ $title }}
      </x-slot>
    </x-navbar>

    <div class="container mt-4 text-center">
      @yield("container")
    </div>

    <div class="footer m-3"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    
    <script src="{{ asset('js/dark-mode-switch.min.js') }}"></script>
        
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>