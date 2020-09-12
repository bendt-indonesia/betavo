<!--
  ____                 _ _     _____           _                       _
 |  _ \               | | |   |_   _|         | |                     (_)
 | |_) | ___ _ __   __| | |_    | |  _ __   __| | ___  _ __   ___  ___ _  __ _
 |  _ < / _ \ '_ \ / _` | __|   | | | '_ \ / _` |/ _ \| '_ \ / _ \/ __| |/ _` |
 | |_) |  __/ | | | (_| | |_   _| |_| | | | (_| | (_) | | | |  __/\__ \ | (_| |
 |____/ \___|_| |_|\__,_|\__| |_____|_| |_|\__,_|\___/|_| |_|\___||___/_|\__,_|

 Powered by Bendt Sistem Indonesia
 All rights reserved.
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('meta_title',env('APP_NAME'))</title>
    <meta name="description" content="@yield('meta_description',env('APP_NAME'))"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="author" content="Bendt Indonesia">
    <meta name="author-contact" content="contact@bendt.io">
    <meta name="author-phone" content="0817178611">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <link rel="stylesheet" href="https://ddjnm832ryc7x.cloudfront.net/css/backend.min.css">
    <link rel="stylesheet" href="https://ddjnm832ryc7x.cloudfront.net/css/vendor.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @include('include.favicons')

    @yield('head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
<div class="loader-container">
    <ul class='loader'>
        <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
    </ul>
</div>
<div class="wrapper boxed-wrapper">
    @include('backend.include.bheader')
    @include('backend.include.bmenu')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header sty-one">
            <h1 class="text-black">
                @yield('title',env('APP_NAME'))
                @yield('title_right')
            </h1>
            @yield('breadcrumb')
        </section>

        <!-- Main content -->
        <section class="content">
            @include('backend.include.alert')
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    @include('backend.include.bfooter')
</div>
@if(Auth::user() && env('FILE_MANAGER'))
    <script>
        window.accessFMKeys = '{{env('FILE_MANAGER')}}';
    </script>
@endif

<script src="https://ddjnm832ryc7x.cloudfront.net/js/vendor.min.js"></script>
<script src="https://ddjnm832ryc7x.cloudfront.net/js/backend.min.js"></script>
@yield('script')
</body>
</html>
