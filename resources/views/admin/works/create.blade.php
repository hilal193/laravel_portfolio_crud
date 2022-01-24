{{-- @extends('layouts.index') --}}
@extends('layouts.back')

@section('content')

<form class="m-5" action="{{ route("works.store") }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="text" name="image" value="image" class="form-control">
        <span style="color: red;">
            @error("image")
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
        <input type="text" name="description" value="{{ old("description") }}" class="form-control" >
        <span style="color: red;">
            @error("description")
            {{ $message }}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <label  class="form-label">Filter</label>
        <input type="text"  name="filter" value="{{ old("filter") }}" class="form-control" >
        <span style="color: red;">
            @error("filter")
            {{ $message }}
            @enderror
        </span>
    </div>
    <button type="submit" class="btn btn-primary vert">Submit</button>
</form>
@endsection
