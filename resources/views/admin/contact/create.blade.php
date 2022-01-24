@extends('layouts.back')

@section('content')

<form class="m-5" action="{{ route("contact.store") }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">nom</label>
        <input type="text" name="nom" value="{{old("nom")}}" class="form-control">
        <span style="color: red;">
            @error("nom")
            {{ $message }}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <label  class="form-label">Email</label>
        <input type="email" name="email" value="{{ old("email") }}" class="form-control" >
        <span style="color: red;">
            @error("email")
            {{ $message }}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <label  class="form-label">Titre</label>
        <input type="text" name="titre" value="{{ old("titre") }}" class="form-control" >
        <span style="color: red;">
            @error("titre")
            {{ $message }}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="message"  name="description" value="{{ old("description") }}" class="form-control" >
        <span style="color: red;">
            @error("description")
            {{ $message }}
            @enderror
        </span>
    </div>
    <button type="submit" class="btn btn-primary vert">Submit</button>
</form>
@endsection

