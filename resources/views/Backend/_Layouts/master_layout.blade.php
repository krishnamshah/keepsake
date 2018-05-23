<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Travel Portal Backend">
    <meta name="author" content="Shades And Shadows">
    <meta name="keyword" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}} - @yield('title')</title>

    <!-- start: Css -->
    <!-- start: Css -->

    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/bootstrap.min.css')}}">

   @yield('css') <!-- plugins -->





    <link href="{{URL::asset('BackendTheme/asset/css/style.css')}}" rel="stylesheet">
    <!-- end: Css -->

    <link rel="shortcut icon" href="URL::asset('BackendTheme/asset/img/logomi.png')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="mimin" class="dashboard">
@include('Backend._Layouts._includes.header')
<div class="container-fluid mimin-wrapper">
    @include('Backend._Layouts._includes.left_nav')
@yield('content')
@include('Backend._Layouts._includes.right_nav')
</div>
@include('Backend._Layouts._includes.mobile_nav')

<!-- start: Javascript -->
<script src="{{URL::asset('BackendTheme/asset/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('BackendTheme/asset/js/jquery.ui.min.js')}}"></script>
<script src="{{URL::asset('BackendTheme/asset/js/bootstrap.min.js')}}"></script>

@yield('script')




  </body>
</html>