<!DOCTYPE html>
<html lang="{{ (app()->getLocale() == 'ua')?'uk': app()->getLocale()}}">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="@yield('meta_keyword')"/>
    <meta name="description" content="@yield('meta_description')"/>
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:title" content="@yield('title')">
    @section('metaDublinCore')
        <meta name="DC.Title" content="@yield('title')">
        <meta name="DC.Creator" content="Liseys">
        <meta name="DC.Subject" content="@yield('title')">
        <meta name="DC.Description" content="@yield('meta_description')">
        <meta name="DC.Publisher" content="{{config('app.name')}}">
        <meta name="DC.Language" content="{{ app()->getLocale() }}">
    @show
    <link rel="canonical" href="{{Request::url()}}"/>

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css?v=123" type="text/css">
</head>
<body>
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__nav__option">
        <a href="{{route('shopping-cart')}}"><img src="/img/icon/cart.png" alt=""> <span class="countInCart">0</span></a>
        <a href="{{route('shopping-cart')}}"><div class="price priceInCart">€0.00</div></a>
    </div>
    <div id="mobile-menu-wrap"></div>
</div>
@include('layouts.header')
@yield('content')
@include('layouts.footer')
@include('layouts.shopping-cart-modal')
@include('layouts.size-modal')
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.countdown.min.js"></script>
<script src="/js/jquery.slicknav.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/main.js?v=123"></script>
@if(View::hasSection('javascript'))
    @yield('javascript')
@endif
</body>
</html>
