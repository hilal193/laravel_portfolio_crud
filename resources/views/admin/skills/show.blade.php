@extends('layouts.back')

@section('content')

<h1>Page admin SHOW : Skills </h1>

<div class="card showw" style="width: 50rem;">
    {{-- <img src="" class="card-img-top" alt=""> --}}
    <img src="{{ $skills->nom }}" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Description : {{ $skills->description }} </h5>
      <p class="card-text">Niveau : {{ $skills->niveau }}</p>
      <a href="{{ route("dashboard") }}" class="btn btn noir">RETURN TO ADMIN</a>
    </div>
  </div>
@endsection
