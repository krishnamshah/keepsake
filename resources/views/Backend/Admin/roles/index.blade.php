@extends('Backend._Layouts.master_layout')
@section('css')
    <!-- plugins -->
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/animate.min.css')}}"/>

    <!-- end: Css -->
@endsection
@section('content')
    <div id="content">
        <div class="tabs-wrapper text-center">
            <div class="panel box-shadow-none text-left content-header">
                <div class="panel-body" style="padding-bottom:10px;">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Create User {{ Auth::user()->name }} !!!</h3>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <!-- start: Content -->
            <div class="col-md-12 padding-0">
                <a href="{{route('roles.create')}}" class="button is-primary is-pulled-right"><i
                            class="fa fa-user-plus m-r-10"></i> Create New Role</a>
            </div>
        </div>
        <hr class="m-t-0">

        <div class="columns is-multiline">
            @foreach ($roles as $role)
                <div class="column is-one-quarter">
                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <h3 class="title">{{$role->display_name}}</h3>
                                    <h4 class="subtitle"><em>{{$role->name}}</em></h4>
                                    <p>
                                        {{$role->description}}
                                    </p>
                                </div>

                                <div class="columns is-mobile">
                                    <div class="column is-one-half">
                                        <a href="{{route('roles.show', $role->id)}}"
                                           class="button is-primary is-fullwidth">Details</a>
                                    </div>
                                    <div class="column is-one-half">
                                        <a href="{{route('roles.edit', $role->id)}}"
                                           class="button is-light is-fullwidth">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('script')
    <!-- plugins -->
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/moment.min.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/jquery.knob.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/jquery.nicescroll.js')}}"></script>


    <!-- custom -->
    <script src="{{URL::asset('BackendTheme/asset/js/main.js')}}"></script>

    <!-- end: Javascript -->
@endsection
