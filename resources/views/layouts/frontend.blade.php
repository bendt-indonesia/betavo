<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

    <meta charset="utf-8">
    <title>{{ isset($meta_title) ? $meta_title : env('APP_NAME')  }}</title>
    @if(isset($meta_desc))
        <meta name="description" content="{{ $meta_desc }}"/>
    @endif
    <meta name="author" content="Bendt Indonesia">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{mix('css/app.min.css')}}"/>

    <!-- Favicons -->
    @include('include.favicons')

    @yield('head')
</head>
<body id="menu" class="body-page">
<div class="page-loader" id="page-loader">
    <div>
        <div class="icon ion-spin"></div>
        <p>loading</p>
    </div>
</div>

@include('include.header')
<main class="page-main {{isset($main)?'':'fullpage-scroll anim-slide-scroll'}} {{isset($main_class) ? $main_class : ''}}" id="mainpage">
@yield('content')
</main>
@yield('content_below')
@include('include.footer')

@yield('bottom')
<script>
    window.RECAPTCHA = '{{env('RECAPTCHA')}}';
    window.CSRF = '{{ csrf_token() }}';
</script>
<script src="https://www.google.com/recaptcha/api.js?render={{env('RECAPTCHA')}}&badge=bottomleft"></script>
<script src="{{mix('/js/vendor.min.js')}}"></script>
<script src="{{mix('/js/app.min.js')}}"></script>

@yield('script')
@if(env('G_ANALYTICS') != "")
    @include('include.analytics')
@endif
</body>
</html>
