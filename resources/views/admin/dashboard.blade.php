@extends("layouts.back")

@section('content')
<div class="sidebar-container mt-10 pt-10">
    <div class="sidebar-logo">
        Back Office
    </div>
    <ul class="sidebar-navigation">
        <li class="header">Create Formulaire</li>
        <li>
            {{-- <a href="{{route('blog.create')}}"> --}}
            <a href="#">
                <i class="fa fa-home" aria-hidden="true"></i> Blog -form
            </a>
        </li>
        <li>
            {{-- <a href="{{route('portfolio.create')}}"> --}}
            <a href="#">

                <i class="fa fa-tachometer" aria-hidden="true"></i> Portfolio -form
            </a>
        </li>

    </ul>
    <ul class="sidebar-navigation">
        <li class="header">Affichage</li>
        <li>
            {{-- <a href="{{route('blog.affichage')}}"> --}}
            <a href="#">

                <i class="fa fa-home" aria-hidden="true"></i> Blog
            </a>
        </li>
        <li>
            {{-- <a href="{{route('portfolio.affichage')}}"> --}}
            <a href="#">

                <i class="fa fa-tachometer" aria-hidden="true"></i> Portfolio
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


@endsection



