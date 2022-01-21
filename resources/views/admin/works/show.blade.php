@extends('layouts.back')

@section('content')

<h1>Page admin SHOW : Works - mes projet </h1>

<div class="card showw" style="width: 50rem;">
    {{-- <img src="" class="card-img-top" alt=""> --}}
    <img src="{{ $works->image }}" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Titre : {{ $works->titre }} </h5>
      <p class="card-text">Description : {{ $works->description }}</p>
      <a href="{{ route("dashboard") }}" class="btn btn noir">RETURN TO ADMIN</a>
    </div>
  </div>
@endsection
