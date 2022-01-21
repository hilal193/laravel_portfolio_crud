@extends('layouts.back')

@section('content')

<h1>Page admin SHOW : Contact </h1>

<div class="card showw" style="width: 50rem;">
    <img src="{{ $contact->nom }}" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Nom : {{ $contact->nom }} </h5>
      <h5 class="card-title">Email : {{ $contact->email }} </h5>
      <p class="card-text">Titre : {{ $contact->titre }}</p>
      <p class="card-text">Description : {{ $contact->description }}</p>
      <a href="{{ route("dashboard") }}" class="btn btn noir">RETURN TO ADMIN</a>
    </div>
  </div>
@endsection
