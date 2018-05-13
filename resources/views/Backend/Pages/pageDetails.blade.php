@extends('Backend._Layouts.master_layout')
@section('css')
    <!-- plugins -->
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/simple-line-icons.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/mediaelementplayer.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/animate.min.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/icheck/skins/flat/red.css')}}"/>

@endsection
@section('content')
    <!-- start: Content -->
    <div id="content" class="profile-v1">
        <div class="col-md-12 col-sm-12 profile-v1-wrapper">
            <div class="col-md-9  profile-v1-cover-wrap" style="padding-right:0px;">
                <div class="profile-v1-pp">
{{--                    <img src="{{URL::to('storage/'.$page->image)}}" class="img-responsive"/>--}}
                    <h2>{{$page->title}}</h2>



                </div>
                {{--<div class="col-md-12 profile-v1-cover">--}}
                {{--<img src="asset/img/bg1.jpg" class="img-responsive">--}}
                {{--</div>--}}
            </div>
            <div class="col-md-3 col-sm-12 padding-0 profile-v1-right">
                <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                    <div class="col-md-12 padding-0 sub-profile-v1-right text-center sub-profile-v1-right1">
                        <h1>51K</h1>
                        <p>Followers</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                    <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right2">
                        <h1>609</h1>
                        <p>Following</p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-4 profile-v1-right-wrap padding-0">
                    <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right3">
                        <h1>82001</h1>
                        <p>Post</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 profile-v1-body">
            <div class="col-md-7">

                <div class="panel box-v7">
                    <div class="panel-body">
                        <div class="col-md-12 padding-0 box-v7-header">
                            <div class="col-md-12 padding-0">
                                <div class="col-md-10 padding-0">
                                    {{--<img src="{{URL::to('storage/'.$page->image)}}"--}}
                                         {{--class="img-responsive box-v7-avatar pull-left"/>--}}
                                    <h4>{{$page->title}}</h4>
                                    <a href="{{route('pages.edit',$page->id)}}" ><span class="label label-warning">Edit</span></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12 padding-0 box-v7-body">
                            {{ $page->description }}

                        </div>
                        <div class="col-md-12  box-v6-content">
                            <div class="panel box-v3">
                                <div class="panel-heading bg-white border-none">
                                    <h4>Detail Profile</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-social-tumblr" style="font-size:2em;"> </span>
                                        </div>

                                        <div class="media-body">
                                            <h5 class="media-heading">Title</h5>
                                            {{$page->title}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-screen-tablet" style="font-size:2em;"> </span>
                                        </div>

                                        <div class="media-body">
                                            <h5 class="media-heading">Description</h5>
                                            {{$page->description}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-globe icons" style="font-size:2em;"> </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Parent Page</h5>
                                            {{ $page->parent_page}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-flag icons" style="font-size:2em;"> </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Slug</h5>
                                            {{$page->slug}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer bg-white border-none">
                                <center>
                                    <input type="button" value="Download as PDF" class="btn btn-danger box-shadow-none"/>

                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="panel box-v3">
                    <div class="panel-heading bg-white border-none">
                        <h4>Report</h4>
                    </div>
                    <div class="panel-body">

                        <div class="media">
                            <div class="media-left"><span class="icon-folder icons" style="font-size:2em;"></span>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading">
                                    Document Handling</h5>
                                <div class="progress progress-mini">
                                    <div class="progress-bar"
                                         role="progressbar"
                                         aria-valuenow="10"
                                         aria-valuemin="0"
                                         aria-valuemax="100"
                                         style="width: 10%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <span class="icon-pie-chart icons" style="font-size:2em;"></span>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading">UI/UX
                                    Development</h5>
                                <div class="progress progress-mini">
                                    <div class="progress-bar progress-bar-success"
                                         role="progressbar"
                                         aria-valuenow="19"
                                         aria-valuemin="0"
                                         aria-valuemax="100"
                                         style="width: 19%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <span class="icon-energy icons" style="font-size:2em;"></span>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading">Server
                                    Optimation</h5>
                                <div class="progress progress-mini">
                                    <div class="progress-bar progress-bar-info"
                                         role="progressbar"
                                         aria-valuenow="55"
                                         aria-valuemin="0"
                                         aria-valuemax="100"
                                         style="width: 55%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <span class="icon-user icons" style="font-size:2em;"></span>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading">User
                                    Status</h5>
                                <div class="progress progress-mini">
                                    <div class="progress-bar progress-bar-warning"
                                         role="progressbar"
                                         aria-valuenow="20"
                                         aria-valuemin="0"
                                         aria-valuemax="100"
                                         style="width:20%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <span class="icon-fire icons" style="font-size:2em;"></span>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading">
                                    Firewall Status</h5>
                                <div class="progress progress-mini">
                                    <div class="progress-bar progress-bar-danger"
                                         role="progressbar"
                                         aria-valuenow="90"
                                         aria-valuemin="0"
                                         aria-valuemax="100"
                                         style="width: 90%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer bg-white border-none">
                        <center>
                            <input type="button"
                                   value="download as pdf"
                                   class="btn btn-danger box-shadow-none"/>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: content -->
@endsection

@section('script')
    <!-- plugins -->
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/icheck.min.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/moment.min.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/mediaelement-and-player.min.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/jquery.nicescroll.js')}}"></script>


    <!-- custom -->
    <script src="{{URL::asset('BackendTheme/asset/js/main.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_flat-red',
                radioClass: 'iradio_flat-red'
            });
            $('video,audio').mediaelementplayer({
                alwaysShowControls: true,
                videoVolume: 'vertical',
                features: ['playpause', 'progress', 'volume', 'fullscreen']
            });
        });
    </script>
@endsection