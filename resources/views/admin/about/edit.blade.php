@extends('layouts.back')

@section('content')

<h1>Page admin EDIT : About </h1>

<form class="m-5" action="{{ route("about.update",$about->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="text" value="{{ $about->image }}" name="image" class="form-control">
    </div>
    <div class="mb-3">
        <label  class="form-label">Titre</label>
        <input type="text" value="{{ $about->titre }}" name="titre" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="text" value="{{ $about->description }}" name="description" class="form-control" >
    </div>
    <button type="submit" class="btn btn vert">CONFIRM</button>
    <a href="{{route("about.index")}}" class="btn btn vert">BACK</a>

</form>
{{-- <a href="{{ route("dashboard") }}">Retour</a> --}}
@endsection
