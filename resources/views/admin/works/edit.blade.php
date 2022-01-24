@extends('layouts.back')

@section('content')

<h1>Page admin EDIT : Works </h1>

<form class="m-5" action="{{ route("works.update",$works->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="text" value="{{ $works->image }}" name="image" class="form-control">
    </div>
    <div class="mb-3">
        <label  class="form-label">Titre</label>
        <input type="text" value="{{ $works->titre }}" name="titre" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="text" value="{{ $works->description }}" name="description" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Filter</label>
        <input type="text" value="{{ $works->filter }}" name="filter" class="form-control" >
    </div>
    {{-- <butto class="btn btn-primary">Submit</button> --}}
    <button type="submit" class="btn btn vert">CONFIRM</button>
    <a href="{{route("works.index")}}" class="btn btn vert">BACK</a>

</form>

{{-- <a href="{{ route("dashboard") }}">Retour</a> --}}


@endsection
