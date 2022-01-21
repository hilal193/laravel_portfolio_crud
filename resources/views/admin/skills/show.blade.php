@extends('layouts.back')

@section('content')

<h1>Page admin SHOW : Skills </h1>

<div class="card showw" style="width: 50rem;">
    {{-- <img src="" class="card-img-top" alt=""> --}}
    <img src="{{ $about->image }}" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Nom : {{ $skills->nom }} </h5>
      <p class="card-text">Nom : {{ $skills->nom }}</p>
      <a href="{{ route("dashboard") }}" class="btn btn noir">RETURN TO ADMIN</a>
    </div>
  </div>
@endsection
