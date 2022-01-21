@extends('layouts.index')

@section('content')
<main class="site-wrapper">
    <div class="pt-table">
        <div class="pt-tablecell page-resume relative">
            <!-- .close -->
            <a href="{{ route("home") }}" class="page-close"><i class="tf-ion-close"></i></a>
            {{-- <a href="./" class="page-close"><i class="tf-ion-close"></i></a> --}}
            <!-- /.close -->

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                        <div class="page-title text-center">
                            <h2>My <span class="primary">history</span> <span class="title-bg">Resume</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="history-block">
                            <div class="section-title light clear">
                                <h3>Education</h3>
                            </div>
                            <!-- /.section-title -->
                            <div class="history-scroller">
                                <div class="history-item">
                                    <div class="history-icon">
                                        <span class="history-hex"></span>
                                        <i class="tf-documents5"></i>
                                    </div>
                                    <div class="history-text">
                                        <h5>Merin Land College</h5>
                                        <span>2012 - 2014</span>
                                    </div>
                                </div>
                                <!-- /.history-item -->
                                <div class="history-item">
                                    <div class="history-icon">
                                        <span class="history-hex"></span>
                                        <i class="tf-documents5"></i>
                                    </div>
                                    <div class="history-text">
                                        <h5>Merin Land College</h5>
                                        <span>2012 - 2014</span>
                                        <p>Claritas est etiam processus dynamicus, qui <br> sequitur mutationem consuetudium lectorum.</p>
                                    </div>
                                </div>
                                <!-- /.history-item -->
                                <div class="history-item">
                                    <div class="history-icon">
                                        <span class="history-hex"></span>
                                        <i class="tf-documents5"></i>
                                    </div>
                                    <div class="history-text">
                                        <h5>Merin Land College</h5>
                                        <span>2012 - 2014</span>
                                    </div>
                                </div>
                                <!-- /.history-item -->
                                <div class="history-item">
                                    <div class="history-icon">
                                        <span class="history-hex"></span>
                                        <i class="tf-documents5"></i>
                                    </div>
                                    <div class="history-text">
                                        <h5>Merin Land College</h5>
                                        <span>2012 - 2014</span>
                                    </div>
                                </div>
                                <!-- /.history-item -->
                                <div class="history-item">
                                    <div class="history-icon">
                                        <span class="history-hex"></span>
                                        <i class="tf-documents5"></i>
                                    </div>
                                    <div class="history-text">
                                        <h5>Merin Land College</h5>
                                        <span>2012 - 2014</span>
                                    </div>
                                </div>
                                <!-- /.history-item -->
                            </div>
                        </div> <!-- /.history-block -->
                    </div> <!-- /.col -->
                    <div class="col-xs-12 col-sm-6">
                        <div class="history-block">
                            <div class="section-title light clear">
                                <h3>Experiences</h3>
                            </div>
                            <!-- /.section-title -->
                            <div class="history-scroller">
                                <div class="history-item">
                                    <div class="history-icon">
                                        <span class="history-hex"></span>
                                        <i class="tf-documents5"></i>
                                    </div>
                                    <div class="history-text">
                                        <h5>Merin Land College</h5>
                                        <span>2012 - 2014</span>
                                    </div>
                                </div>
                                <!-- /.history-item -->
                                <div class="history-item">
                                    <div class="history-icon">
                                        <span class="history-hex"></span>
                                        <i class="tf-documents5"></i>
                                    </div>
                                    <div class="history-text">
                                        <h5>Merin Land College</h5>
                                        <span>2012 - 2014</span>
                                        <p>Claritas est etiam processus dynamicus, qui <br> sequitur mutationem consuetudium lectorum.</p>
                                    </div>
                                </div>
                                <!-- /.history-item -->
                                <div class="history-item">
                                    <div class="history-icon">
                                        <span class="history-hex"></span>
                                        <i class="tf-documents5"></i>
                                    </div>
                                    <div class="history-text">
                                        <h5>Merin Land College</h5>
                                        <span>2012 - 2014</span>
                                    </div>
                                </div>
                                <!-- /.history-item -->
                                <div class="history-item">
                                    <div class="history-icon">
                                        <span class="history-hex"></span>
                                        <i class="tf-documents5"></i>
                                    </div>
                                    <div class="history-text">
                                        <h5>Merin Land College</h5>
                                        <span>2012 - 2014</span>
                                    </div>
                                </div>
                                <!-- /.history-item -->
                                <div class="history-item">
                                    <div class="history-icon">
                                        <span class="history-hex"></span>
                                        <i class="tf-documents5"></i>
                                    </div>
                                    <div class="history-text">
                                        <h5>Merin Land College</h5>
                                        <span>2012 - 2014</span>
                                    </div>
                                </div>
                                <!-- /.history-item -->
                            </div>
                        </div> <!-- /.history-block -->
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->

            <nav class="page-nav clear">
                <div class="container">
                    <div class="flex flex-middle space-between">
                        <span class="prev-page"><a href="{{ route("services") }}" class="link">&larr; Prev Page</a></span>
                        {{-- <span class="prev-page"><a href="services.html" class="link">&larr; Prev Page</a></span> --}}
                        <span class="copyright hidden-xs">Copyright &copy; 2016 Phantom, All Rights Reserved.</span>
                        <span class="next-page"><a href="{{ route("works") }}" class="link">Next Page &rarr;</a></span>
                        {{-- <span class="next-page"><a href="works.html" class="link">Next Page &rarr;</a></span> --}}
                    </div>
                </div>
                <!-- /.page-nav -->
            </nav>
            <!-- /.container -->

        </div> <!-- /.pt-tablecell -->
    </div> <!-- /.pt-table -->
</main> <!-- /.site-wrapper -->
@endsection
