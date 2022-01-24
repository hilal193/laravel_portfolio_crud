@extends('layouts.back')

@section('content')



<div class="sidebar-container mt-10 pt-10">
    <div class="sidebar-logo">
      Back Office
    </div>
    <ul class="sidebar-navigation">
      <li class="header">Create Formulaire</li>
      <li>
        <a href="{{route('works.create')}}">
            <i class="fa fa-home" aria-hidden="true"></i> Works -form
        </a>
    </li>
      <li>
        <a href="#">
          <i class="fa fa-tachometer" aria-hidden="true"></i> Portfolio -form
        </a>
      </li>
    </ul>
    <ul class="sidebar-navigation">
        <li class="header">Affichage</li>
        <li>
            <a href="{{route('works.index')}}">
                {{-- <a href="#"> --}}
              <i class="fa fa-tachometer" aria-hidden="true"></i> Works - mes projets
            </a>
        </li>
        <li>
            <a href="{{route('about.index')}}">
                {{-- <a href="#"> --}}
              <i class="fa fa-tachometer" aria-hidden="true"></i> About
            </a>
        </li>
        <li>
            <a href="{{route('contact.index')}}">
                {{-- <a href="#"> --}}
              <i class="fa fa-tachometer" aria-hidden="true"></i> Contact
            </a>
        </li>

        <li>
            <a href="{{route('dashboard')}}">
                <i class="fa fa-home" aria-hidden="true"></i> Dashboard
            </a>
        </li>
        <li class="header">Another Menu</li>
        <li>
          <a href="#">
            <i class="fa fa-users" aria-hidden="true"></i> Friends
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-cog" aria-hidden="true"></i> Settings
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-info-circle" aria-hidden="true"></i> Information
          </a>
        </li>
      </ul>
  </div>
</div>


  <div class="content-container">


    {{-- table --}}

    <h2 class="sub-header">Dashboard</h2>
              {{-- blog --}}
              <h3>Mes projets - ABOUT :</h3>
              <p> ADD Project :  <a href="{{route('about.create')}}" class="btn btn vert pt-1 m-1">+ADD</a>
              </p>
              <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="table-info">
                            <th>#id</th>
                              <th>TITRE</th>
                              <th>IMAGE</th>
                              <th>DESCRIPTION</th>
                              <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($paginationAbout as $item)
                        {{-- @forelse ($afficheAbout as $item) --}}

                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->titre }}</td>
                            <td><img src="{{ $item->image }}" style="height:50px; width:50px;" alt=""></td>
                            <td>{{ $item->description }}</td>

                             <td class="df">
                            <a href="{{route('about.show', $item->id)}}" class="btn btn vert">Show</a>
                            <a href="{{route('about.edit', $item->id)}}" class="btn btn orange edit">Edit</a>
                            <form action="{{ route("about.destroy", $item->id) }}" method="POST">
                                @csrf
                            @method('DELETE')
                                <button type="submit" class="btn rouge">Delete</button>
                                {{-- <button type="submit" class="btn rouge">Show</button> --}}

                            </td>
                            </form>

                        </tr>

                        @empty
                        <tr>
                            <td>Vide</td>
                            <td>Vide</td>
                            <td>Vide</td>
                            <td>Vide</td>
                            <td>Vide</td>
                            <td>
                                {{-- <button type="submit" class="btn rouge">Delete</button> --}}
                                {{-- <button type="submit" class="btn rouge">show</button> --}}
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="justify-content-center">
                    {{ $paginationAbout->links('pagination::bootstrap-4') }}
                </div>
            </div>


  </div>

@endsection
