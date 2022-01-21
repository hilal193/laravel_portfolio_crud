@extends('layouts.index')

@section('content')



<main class="site-wrapper">
    <div class="pt-table">
        <div class="pt-tablecell page-welcome relative">
            <!-- .close -->
            <a href="{{ route("home") }}" class="page-close"><i class="tf-ion-close"></i></a>
            {{-- <a href="./" class="page-close"><i class="tf-ion-close"></i></a> --}}
            <!-- /.close -->

            <div class="author-image-large">
                <img src={{ asset("img/author.png") }} alt="">
            </div>

            <div class="container">
                <div class="row">
                    {{-- <div class="col-xs-12 col-md-6 col-lg-7">
                        <div class="page-title">
                            <h2>David <span class="primary">ramon</span> <span class="title-bg">About</span></h2>
                            <p>A product designer from England, who focuses on interactive design & A freelance designer focusing on typography & clean interfaces. Also works in Google..</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores repellendus corporis, tenetur inventore perferendis reprehenderit autem dignissimos non quos unde eveniet sapiente necessitatibus consequuntur ea ab dolore, minus nam eaque.</p>
                        </div>
                    </div> --}}
                    <div class="col-xs-12 col-md-6 col-lg-7">
                        <div class="page-title text-center">
                            <h2>About <span class="primary">me</span> <span class="title-bg">Hilal</span></h2>
                            <p>I am working as a professional UI/UX Designer since 2007. Worked in more than 200 live projects and also with more than 120 different clients!</p>
                        </div>
                    </div>



                </div> <!-- /.row -->
            </div> <!-- /.container -->

            <nav class="page-nav clear">
                <div class="container">
                    <div class="flex flex-middle space-between">
                        <span class="prev-page"><a href="{{ route("home") }}" class="link">&larr; Prev Page</a></span>
                        {{-- <span class="prev-page"><a href="index.html" class="link">&larr; Prev Page</a></span> --}}
                        <span class="copyright hidden-xs">Copyright &copy; 2016 Phantom, All Rights Reserved.</span>
                        <span class="next-page"><a href="{{ route("about") }}" class="link">Next Page &rarr;</a></span>
                        {{-- <span class="next-page"><a href="about.html" class="link">Next Page &rarr;</a></span> --}}
                    </div>
                </div>
                <!-- /.page-nav -->
            </nav>
            <!-- /.container -->

        </div> <!-- /.pt-tablecell -->
    </div> <!-- /.pt-table -->
</main> <!-- /.site-wrapper -->
@endsection
