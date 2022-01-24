{{-- @extends('layouts.index') --}}
@extends('layouts.back')

@section('content')

@if ($errors)

@foreach ($errors->all() as $item)

<li style="color: red; text-align: center">
    {{ $item }}
</li>

@endforeach

@endif
{{-- {{ $errors }} --}}
<form class="m-5" action="{{ route("about.store") }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="text" name="image" class="form-control">
    </div>
    <div class="mb-3">
        <label  class="form-label">Titre</label>
        <input type="text" value=""  name="titre" class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="text" value=""  name="description" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary vert">Submit</button>
</form>
@endsection
