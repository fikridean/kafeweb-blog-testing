@extends('layouts.main')

@section('container')
  <h1>{{ $title }}</h1>

  <div class="row mt-4">
    @foreach ($users as $user)
      <div class="col-lg-3 mt-4">
        <x-cardUsers>
          <x-slot name="img">
            <img src="storage/{{ $user->image }}" alt="{{ $user->name }}" class="rounded-circle shadow-lg" style="width: 100px; height: 100px">
          </x-slot>
          <x-slot name="name">{{ $user->name }}</x-slot>
          <x-slot name="username">{{ $user->username }}</x-slot>
          <x-slot name="since">Since {{ $user->created_at->diffForHumans() }}</x-slot>
        </x-cardUsers>
      </div>
    @endforeach
  </div>
@endsection