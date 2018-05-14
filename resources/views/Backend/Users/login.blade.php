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
    <title>{{env('APP_NAME')}} - User Login</title>

    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/bootstrap.min.css')}}">

    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/simple-line-icons.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/animate.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/fullcalendar.min.css')}}"/>
    <link href="{{URL::asset('BackendTheme/asset/css/style.css')}}" rel="stylesheet">
    <!-- end: Css -->
    <!-- end: Css -->

    <link rel="shortcut icon" href="{{URL::asset('BackendTheme/asset/img/logomi.png')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="mimin" class="dashboard form-signin-wrapper">

<div class="container">

    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="panel periodic-login">
            {{--<span class="atomic-number">28</span>--}}
            <div class="panel-body text-center">
                <h1 class="atomic-symbol">Ks</h1>
                {{--<p class="atomic-mass">14.072110</p>--}}
                <p class="element-name">{{env('APP_NAME')}}</p>

                <i class="icons icon-arrow-down"></i>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <span class="bar"></span>
                    <label>User Email</label>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <span class="bar"></span>
                    <label>Password</label>
                </div>
                <label class="pull-left">
                    <input type="checkbox" class="icheck pull-left" name="remember" {{ old('remember') ? 'checked' : '' }}/> Remember me
                </label>
                <input type="submit" class="btn col-md-12" value="SignIn"/>
            </div>
            <div class="text-center" style="padding:5px;">
                <a href="{{ route('password.request') }}">Forgot Password </a>
                {{--<a href="reg.html">| Signup</a>--}}
            </div>
        </div>
    </form>

</div>

<!-- end: Content -->
<!-- start: Javascript -->
<script src="{{URL::asset('BackendTheme/asset/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('BackendTheme/asset/js/jquery.ui.min.js')}}"></script>
<script src="{{URL::asset('BackendTheme/asset/js/bootstrap.min.js')}}"></script>

<script src="{{URL::asset('BackendTheme/asset/js/plugins/moment.min.js')}}"></script>
<script src="{{URL::asset('BackendTheme/asset/js/plugins/icheck.min.js')}}"></script>

<!-- custom -->
<script src="{{URL::asset('BackendTheme/asset/js/main.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('input').iCheck({
            checkboxClass: 'icheckbox_flat-aero',
            radioClass: 'iradio_flat-aero'
        });
    });
</script>
<!-- end: Javascript -->
</body>
</html>