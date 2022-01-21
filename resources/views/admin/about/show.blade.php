@extends('layouts.back')

@section('content')

<h1>Page admin SHOW : ABOUT </h1>

<div class="card showw" style="width: 50rem;">
    {{-- <img src="" class="card-img-top" alt=""> --}}
    <img src="{{ $about->image }}" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Titre : {{ $about->titre }} </h5>
      <p class="card-text">Description : {{ $about->description }}</p>
      <a href="{{ route("dashboard") }}" class="btn btn noir">RETURN TO ADMIN</a>
    </div>
  </div>
@endsection
