<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profiles Kecamatan Wuluhan</title>
    <meta name="author" content="Themeholy">
    <meta name="description" content="Webteck - Technology & IT Solutions HTML Template">
    <meta name="keywords" content="Webteck - Technology & IT Solutions HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.min.css')}}">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @yield('styles')

</head>

<body>
@include('home.layouts.partials.loader')
<!--==============================
    Sidemenu
============================== -->
@include('home.layouts.partials.sidebar-right')
<!--==============================
    Mobile Menu
============================== -->
@include('home.layouts.partials.sidebar-left')
<!--==============================
	Header Area
==============================-->
    <header class="th-header header-layout1">
@include('home.layouts.partials.header')
@include('home.layouts.partials.navbar')
    </header>

@yield('homepage')

<!--==============================
	Footer Area
==============================-->
@include('home.layouts.partials.footer')

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
@include('home.layouts.partials.js')

</body>
</html>