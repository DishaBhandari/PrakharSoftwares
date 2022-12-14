<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@yield('title')</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('main/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('main/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('main/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('main/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('main/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('main/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('main/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('main/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('main/vendors/hamburgers/hamburgers.min.css') }}" rel="stylesheet">
    <link href="{{ asset('main/vendors/loaders.css/loaders.min.css') }}" rel="stylesheet">
    <link href="{{ asset('main/assets/css/theme.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('main/assets/css/user.min.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap"
        rel="stylesheet">
    <style>
        body,
        a {
            color: black !important;
        }

        body {
            background-color: #26de3324;
        }

        .bg-100 {
            background-color: #35f2283b !important;
        }

        .bg-white {
            background-color: #1e8a2b63 !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        svg,
        span,
        .brand-icon,
        .text-primary {
            color: black !important;
        }

        .bg-primary {
            background-color: rgb(8, 77, 8) !important;
        }

        .btn-primary {
            background-color: rgb(8, 77, 8) !important;
            color: white !important;
        }

        header .btn {
            color: white !important;
        }

        .preloader {
            background-color: rgb(8, 77, 8) !important;
        }

        .navbar-elixir {
            background: rgb(255 255 255);
        }

        .navbar-elixir a {
            font-weight: 900;
            font-size: 16px !important;
        }

        .nav-link {
            padding-right: 15px !important;
            padding-left: 15px !important;
        }

        .nav-link a:hover {
            color: green;
        }

        .dropdown-indicator:after {
            right: 0.2rem !important;
        }
    </style>
</head>

<body>
