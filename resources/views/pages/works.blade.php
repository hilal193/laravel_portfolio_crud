@extends('layouts.index')

@section('content')
<main class="site-wrapper">
    <div class="pt-table">
        <div class="pt-tablecell page-works relative">
            <!-- .close -->
            <a href="{{ route("home") }}" class="page-close"><i class="tf-ion-close"></i></a>
            {{-- <a href="./" class="page-close"><i class="tf-ion-close">    </i></a> --}}
            <!-- /.close -->

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                        <div class="page-title text-center">
                            <h2>My <span class="primary">works</span> <span class="title-bg">works</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-xs-12">
                        <ul class="filter list-inline">
                            <li><a href="#" class="active" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".Projet">Projet</a></li>
                            <li><a href="#" data-filter=".Illustrator">Autre</a></li>
                            <li><a href="#" data-filter=".Indesign">Indesign</a></li>
                            <li><a href="#" data-filter=".Exercices">Exercices</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row isotope-gutter">
                @forelse ($works as $item)

                    <div class="col-xs-12 col-sm-6 col-md-4 {{ $item->filter }} Illustrator">
                        <figure class="works-item">
                            <img src={{ $item->image}} alt="">
                            <div class="overlay"></div>
                            <figcaption class="works-inner">
                                <h4>{{  $item->titre  }}</h4>
                                <p>{{ $item->description }}</p>

                            </figcaption>
                        </figure>
                    </div>
                    {{-- <div class="col-xs-12 col-sm-6 col-md-4 Illustrator">
                        <figure class="works-item">
                            <img src={{ asset("img/works/2.jpg") }} alt="">
                            <div class="overlay"></div>
                            <figcaption class="works-inner">
                                <h4>Project Name</h4>
                                <p>Illustration, Digital Art</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 Indesign Photoshop">
                        <figure class="works-item">
                            <img src={{ asset("img/works/3.jpg") }} alt="">
                            <div class="overlay"></div>
                            <figcaption class="works-inner">
                                <h4>Project Name</h4>
                                <p>Illustration, Digital Art</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 Exercices Illustrator">
                        <figure class="works-item">
                            <img src={{ asset("img/works/4.jpg") }} alt="">
                            <div class="overlay"></div>
                            <figcaption class="works-inner">
                                <h4>Project Name</h4>
                                <p>Illustration, Digital Art</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 Photoshop">
                        <figure class="works-item">
                            <img src={{ asset("img/works/5.jpg") }} alt="">
                            <div class="overlay"></div>
                            <figcaption class="works-inner">
                                <h4>Project Name</h4>
                                <p>Illustration, Digital Art</p>
                            </figcaption>
                        </figure>
                    </div> --}}
                @empty
                <p>vide</p>
                {{-- <div class="row isotope-gutter">
                    <div class="col-xs-12 col-sm-6 col-md-4 Projet Illustrator">
                        <figure class="works-item">
                            <img src={{ asset("img/works/1.jpg") }} alt="">
                            <div class="overlay"></div>
                            <figcaption class="works-inner">
                                <h4>Project Name</h4>
                                <p>Illustration, Digital Art</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 Illustrator">
                        <figure class="works-item">
                            <img src={{ asset("img/works/2.jpg") }} alt="">
                            <div class="overlay"></div>
                            <figcaption class="works-inner">
                                <h4>Project Name</h4>
                                <p>Illustration, Digital Art</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 Indesign Photoshop">
                        <figure class="works-item">
                            <img src={{ asset("img/works/3.jpg") }} alt="">
                            <div class="overlay"></div>
                            <figcaption class="works-inner">
                                <h4>Project Name</h4>
                                <p>Illustration, Digital Art</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 Exercices Illustrator">
                        <figure class="works-item">
                            <img src={{ asset("img/works/4.jpg") }} alt="">
                            <div class="overlay"></div>
                            <figcaption class="works-inner">
                                <h4>Project Name</h4>
                                <p>Illustration, Digital Art</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 Photoshop">
                        <figure class="works-item">
                            <img src={{ asset("img/works/5.jpg") }} alt="">
                            <div class="overlay"></div>
                            <figcaption class="works-inner">
                                <h4>Project Name</h4>
                                <p>Illustration, Digital Art</p>
                            </figcaption>
                        </figure>
                    </div>
                </div> <!-- /.row --> --}}
                @endforelse
            </div> <!-- /.row -->

            </div> <!-- /.container -->

            <nav class="page-nav clear">
                <div class="container">
                    <div class="flex flex-middle space-between">
                        <span class="prev-page"><a href="{{ route("resume") }}" class="link">&larr; Prev Page</a></span>
                        {{-- <span class="prev-page"><a href="resume.html" class="link">&larr; Prev Page</a></span> --}}
                        <span class="copyright hidden-xs">Copyright &copy; 2016 Phantom, All Rights Reserved.</span>
                        <span class="next-page"><a href="{{ route("testimonials") }}" class="link">Next Page &rarr;</a></span>
                        {{-- <span class="next-page"><a href="testimonials.html" class="link">Next Page &rarr;</a></span> --}}
                    </div>
                </div>
                <!-- /.page-nav -->
            </nav>
            <!-- /.container -->

        </div> <!-- /.pt-tablecell -->
    </div> <!-- /.pt-table -->
</main> <!-- /.site-wrapper -->
@endsection
