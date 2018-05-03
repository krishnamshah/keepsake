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
                    <img src="{{URL::to('storage/'.$vehicle->image)}}" class="img-responsive"/>
                    <h2>{{$vehicle->name}}</h2>



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
                                    <img src="{{URL::to('storage/'.$vehicle->image)}}"
                                         class="img-responsive box-v7-avatar pull-left"/>
                                    <h4>{{$vehicle->name}}</h4>
                                    <a href="{{route('vehicles.edit',$vehicle->id)}}" ><span class="label label-warning">Edit</span></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12 padding-0 box-v7-body">
                            {!! $vehicle->description !!}

                        </div>
                        <div class="col-md-12  box-v6-content">
                            <div class="panel box-v3">
                                <div class="panel-heading bg-white border-none">
                                    <h4>Detail Profile</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-anchor icons" style="font-size:2em;"> </span>
                                        </div>

                                        <div class="media-body">
                                            <h5 class="media-heading">Name</h5>
                                            {{$vehicle->name}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-user icons" style="font-size:2em;"> </span>
                                        </div>

                                        <div class="media-body">
                                            <h5 class="media-heading">Description</h5>
                                            {{$vehicle->description}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-globe icons" style="font-size:2em;"> </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">itinerary</h5>
                                            {{ $vehicle->itinerary}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-flag icons" style="font-size:2em;"> </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Tag</h5>
                                            {{$vehicle->tag}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-home icons" style="font-size:2em;"> </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Duration</h5>
                                            {{$vehicle->duration}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-phone icons" style="font-size:2em;"> </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Price</h5>
                                            {{$vehicle->price}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-phone icons" style="font-size:2em;"></span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Group rate</h5>
                                            {{$vehicle->group_rate}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-envelope-letter icons" style="font-size:2em;"> </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Best time to travel</h5>
                                            {{ $vehicle->best_time}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-user icons" style="font-size:2em;"></span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Size of Group</h5>
                                            {{ $vehicle->group_size}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-user-follow icons" style="font-size:2em;"> </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Cost Includes Excludes</h5>
                                            {{ $vehicle->cost_includes_excludes}}
                                        </div>
                                    </div>

                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-envelope-letter icons" style="font-size:2em;"> </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Image</h5>
                                            {{ $vehicle->image}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-envelope-letter icons" style="font-size:2em;"> </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">User Id </h5>
                                            {{$vehicle->user_id}}
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
                        @php
                            $i=1
                        @endphp
                        @forelse($booking->bookedvehicledetails as $booked)
                            <div class="media">
                                <div class="media-left">
                                    <span class="icon-envelope-letter icons" style="font-size:2em;"> </span>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Traveller {{$i}}</h5>
                                    {{ $booked->name}}
                                    {{ $booked->gender}}
                                    {{ $booked->dob}}
                                    {{ $booked->address}}
                                    {{ $booked->phone_no}}
                                    @php
                                        $i++
                                    @endphp
                                </div>
                            </div>


                        @empty
                            sorry booking not found.
                        @endforelse
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