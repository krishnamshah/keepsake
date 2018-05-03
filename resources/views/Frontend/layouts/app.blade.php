<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">

<head>


    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest">
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="{{URL::asset('FrontEndTheme/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('FrontEndTheme/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{URL::asset('FrontEndTheme/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('FrontEndTheme/css/styles.css')}}">
    <link rel="stylesheet" href="{{URL::asset('FrontEndTheme/css/mystyles.css')}}">
    <script src="{{URL::asset('FrontEndTheme/js/modernizr.js')}}"></script>


    <link rel="alternate stylesheet" type="text/css" href="{{URL::asset('FrontendTheme/css/schemes/bright-turquoise.css')}}" title="bright-turquoise" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{URL::asset('FrontendTheme/css/schemes/turkish-rose.css')}}" title="turkish-rose" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{URL::asset('FrontendTheme/css/schemes/salem.css')}}" title="salem" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{URL::asset('FrontendTheme/css/schemes/hippie-blue.css')}}" title="hippie-blue" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{URL::asset('FrontendTheme/css/schemes/mandy.css')}}" title="mandy" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{URL::asset('FrontendTheme/css/schemes/green-smoke.css')}}" title="green-smoke" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{URL::asset('FrontendTheme/css/schemes/horizon.css')}}" title="horizon" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{URL::asset('FrontendTheme/css/schemes/cerise.css')}}" title="cerise" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{URL::asset('FrontendTheme/css/schemes/brick-red.css')}}" title="brick-red" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{URL::asset('FrontendTheme/css/schemes/de-york.css')}}" title="de-york" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{URL::asset('FrontendTheme/css/schemes/shamrock.css')}}" title="shamrock" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{URL::asset('FrontendTheme/css/schemes/studio.css')}}" title="studio" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{URL::asset('FrontendTheme/css/schemes/leather.css')}}" title="leather" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{URL::asset('FrontendTheme/css/schemes/denim.css')}}" title="denim" media="all">
    <link rel="alternate stylesheet" type="text/css" href="{{URL::asset('FrontendTheme/css/schemes/scarlet.css')}}" title="scarlet" media="all">
</head>

<body>

<!-- FACEBOOK WIDGET -->
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- /FACEBOOK WIDGET -->
<div class="global-wrap">
   @include('Frontend.layouts._includes.header')

   @include('Frontend.layouts._includes.slider')



   @yield('content')



    @include('Frontend.layouts._includes.footer')

    <script src="{{URL::asset('FrontEndTheme/js/jquery.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/bootstrap.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/slimmenu.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/bootstrap-timepicker.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/nicescroll.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/dropit.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/ionrangeslider.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/icheck.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/fotorama.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="{{URL::asset('FrontEndTheme/js/typeahead.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/card-payment.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/magnific.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/owl-carousel.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/fitvids.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/tweet.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/countdown.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/gridrotator.js')}}"></script>
    <script src="{{URL::asset('FrontEndTheme/js/custom.js')}}"></script>

</div>
</body>

</html>




