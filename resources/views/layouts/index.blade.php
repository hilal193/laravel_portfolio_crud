<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <!-- meta charset -->
        <meta charset="utf-8">
        <!-- site title -->
        <title>Phantom | Personal Resume Template</title>
        <!-- meta description -->
        <meta name="description" content="">
        <!-- mobile viwport meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- fevicon -->
        <link rel="shortcut icon" type="image/x-icon" href={{ asset("favicon.ico") }}>

        <!-- ================================
        CSS Files
        ================================= -->
        <link href={{ asset("https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800") }} rel="stylesheet">
        <link rel="stylesheet" href={{ asset("css/themefisher-fonts.min.css") }}>
        <link rel="stylesheet" href={{ asset("css/owl.carousel.min.css") }}>
        <link rel="stylesheet" href={{ asset("css/bootstrap.min.css") }}>
        <link rel="stylesheet" href={{ asset("css/main.css") }}>
        <link id="color-changer" rel="stylesheet" href={{ asset("css/colors/color-0.css") }}>
    </head>

    <body>

        @include("partials.preloader")
        @include("partials.switchcolor")

        @yield("content")

        <!-- ================================
        JavaScript Libraries
        ================================= -->
        <script src={{ asset("js/vendor/jquery-2.2.4.min.js") }}></script>
        <script src={{ asset("js/vendor/bootstrap.min.js") }}></script>
        <!-- <script src="js/jquery.easing.min.js"></script> -->
        <script src={{ asset("js/isotope.pkgd.min.js") }}></script>
        <script src={{ asset("js/jquery.nicescroll.min.js") }}></script>
        <script src={{ asset("js/owl.carousel.min.js") }}></script>
        <script src={{ asset("js/jquery-validation.min.js") }}></script>
        <script src={{ asset("js/form.min.js") }}></script>
        <script src={{ asset("js/main.js") }}></script>
    </body>
</html>
