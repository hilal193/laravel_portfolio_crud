@extends('layouts.back')

@section('content')

<form class="m-5" action="{{ route("skills.store") }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">nom</label>
        <input type="text" name="nom" value="{{ old("nom") }}" class="form-control">
        <span style="color: red;">
            @error("nom")
            {{ $message }}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="text" name="image" value="{{ old("image") }}" class="form-control">
        <span style="color: red;">
            @error("image")
            {{ $message }}
            @enderror
        </span>
    </div>
    {{-- <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="text" value=""  name="description" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Niveau</label>
        <input type="text" value=""  name="niveau" class="form-control" >
    </div> --}}
    <button type="submit" class="btn btn-primary vert">Submit</button>
</form>
@endsection
