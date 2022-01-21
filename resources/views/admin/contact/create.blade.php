@extends('layouts.back')

@section('content')

<form class="m-5" action="{{ route("contact.store") }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">nom</label>
        <input type="text" name="nom" class="form-control">
    </div>
    <div class="mb-3">
        <label  class="form-label">Email</label>
        <input type="email" value=""  name="email" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Titre</label>
        <input type="text" value=""  name="titre" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="message" value=""  name="description" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary vert">Submit</button>
</form>
@endsection

