@extends('layouts.index')

@section('content')
{{-- <h1>test</h1> --}}
<main class="site-wrapper">
    <div class="pt-table">
        <div class="pt-tablecell page-about relative">
            <!-- .close -->
            <a href="{{ route("home") }}" class="page-close"><i class="tf-ion-close"></i></a>
            {{-- <a href="./" class="page-close"><i class="tf-ion-close"></i></a> --}}
            <!-- /.close -->

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                        <div class="page-title text-center">
                            <h2>My <span class="primary">skills</span> <span class="title-bg">Hilal</span></h2>
                            <p>I am working as a professional UI/UX Designer since 2007. Worked in more than 200 live projects and also with more than 120 different clients!</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="about-author">
                            <figure class="author-thumb">
                                <img src="https://us.123rf.com/450wm/tony4urban/tony4urban1302/tony4urban130200001/17746154-homme-de-tr%C3%A8s-grande-taille-sans-illustration-visage.jpg?ver=6" alt="">
                                {{-- <img src="img/author.jpg" alt=""> --}}

                            </figure> <!-- /.author-bio -->
                            <div class="author-desc">
                                <p><b>Date of birth:</b> 26th June, 1993</p>
                                <p><b>Language:</b> English, Dutch, French</p>
                                <p><b>Expert in:</b> UI/UX, Web development</p>
                                <p><b>Freelance:</b> Available</p>
                            </div>
                            <!-- /.author-desc -->
                        </div> <!-- /.about-author -->
                        <p>I'm a multi-award winning designer that has been specialising in web design for the past three years although I have experience in branding and print.Projects.</p>
                    </div> <!-- /.col -->

                    <div class="col-xs-12 col-md-6">
                        <div class="section-title clear">
                            <h3>Skills</h3>
                        </div>
                        @forelse ($skill as $item)
                        <div class="skill-wrapper">
                            <div class="progress clear">
                                <div class="skill-name">{{ $item->nom }}</div>
                                <div class="">
                                {{-- <div class="skill-bar"> --}}
                                    <div class="bar"></div>
                                    <img src={{ $item->image }} alt="" style="width: 150px; height: 150px; margin-left: 35%">
                                    {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/640px-PHP-logo.svg.png" alt="" style="width: 50px; height: 50px; margin-left: 35%"> --}}
                                </div>
                                <div class="skill-lavel" data-skill-value="90%"></div>
                            </div> <!-- /.progress -->

                        </div> <!-- /.skill-wrapper -->
                        @empty

                        <div class="skill-wrapper">
                            <div class="progress clear">
                                <div class="skill-name">Photoshop</div>
                                <div class="skill-bar">
                                    <div class="bar"></div>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/640px-PHP-logo.svg.png" alt="" style="width: 50px; height: 50px; margin-left: 35%">
                                </div>
                                <div class="skill-lavel" data-skill-value="90%"></div>
                            </div> <!-- /.progress -->
                            <div class="progress clear">
                                <div class="skill-name">Illustrator</div>
                                <div class="skill-bar">
                                    <div class="bar"></div>
                                </div>
                                <div class="skill-lavel" data-skill-value="78%"></div>
                            </div> <!-- /.progress -->
                            <div class="progress clear">
                                <div class="skill-name">After Fffects</div>
                                <div class="skill-bar">
                                    <div class="bar"></div>
                                </div>
                                <div class="skill-lavel" data-skill-value="85%"></div>
                            </div> <!-- /.progress -->
                            <div class="progress clear">
                                <div class="skill-name">HTML5</div>
                                <div class="skill-bar">
                                    <div class="bar"></div>
                                </div>
                                <div class="skill-lavel" data-skill-value="95%"></div>
                            </div> <!-- /.progress -->
                            <div class="progress clear">
                                <div class="skill-name">WordPress</div>
                                <div class="skill-bar">
                                    <div class="bar"></div>
                                </div>
                                <div class="skill-lavel" data-skill-value="70%"></div>
                            </div> <!-- /.progress -->
                            <div class="progress clear">
                                <div class="skill-name">jQuery</div>
                                <div class="skill-bar">
                                    <div class="bar"></div>
                                </div>
                                <div class="skill-lavel" data-skill-value="75%"></div>
                            </div> <!-- /.progress -->
                        </div> <!-- /.skill-wrapper -->
                        @endforelse
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->

            <nav class="page-nav clear">
                <div class="container">
                    <div class="flex flex-middle space-between">
                        <span class="prev-page"><a href="{{ route("skills") }}" class="link">&larr; Prev Page</a></span>
                        {{-- <span class="prev-page"><a href="welcome.html" class="link">&larr; Prev Page</a></span> --}}
                        <span class="copyright hidden-xs">Copyright &copy; 2016 Phantom, All Rights Reserved.</span>
                        <span class="next-page"><a href="{{ route("services") }}" class="link">Next Page &rarr;</a></span>
                        {{-- <span class="next-page"><a href="services.html" class="link">Next Page &rarr;</a></span> --}}
                    </div>
                </div>
                <!-- /.page-nav -->
            </nav>
            <!-- /.container -->
        </div> <!-- /.pt-tablecell -->
    </div> <!-- /.pt-table -->
</main> <!-- /.site-wrapper -->
@endsection
