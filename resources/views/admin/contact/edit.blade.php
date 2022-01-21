@extends('layouts.back')

@section('content')

<h1>Page admin EDIT : Contact </h1>

<form class="m-5" action="{{ route("contact.update",$contact->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" value="{{ $contact->nom }}" name="nom" class="form-control">
    </div>
    <div class="mb-3">
        <label  class="form-label">Email</label>
        <input type="email" value="{{ $contact->email }}" name="email" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Titre</label>
        <input type="text" value="{{ $contact->titre }}" name="titre" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="text" value="{{ $contact->description }}" name="description" class="form-control" >
    </div>
    <button type="submit" class="btn btn vert">CONFIRM</button>
    <a href="{{route("contact.index")}}" class="btn btn vert">BACK</a>

</form>
{{-- <a href="{{ route("dashboard") }}">Retour</a> --}}
@endsection
