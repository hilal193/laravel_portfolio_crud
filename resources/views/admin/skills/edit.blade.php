@extends('layouts.back')

@section('content')

<h1>Page admin EDIT : Skills </h1>

<form class="m-5" action="{{ route("skills.update",$skills->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" value="{{ $skills->nom }}" name="nom" class="form-control">
    </div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="text" value="{{ $skills->description }}" name="description" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Niveau</label>
        <input type="text" value="{{ $skills->niveau }}" name="niveau" class="form-control" >
    </div>
    {{-- <butto class="btn btn-primary">Submit</button> --}}
    <button type="submit" class="btn btn vert">CONFIRM</button>
    <a href="{{route("skills.index")}}" class="btn btn vert">BACK</a>

</form>

{{-- <a href="{{ route("dashboard") }}">Retour</a> --}}


@endsection
