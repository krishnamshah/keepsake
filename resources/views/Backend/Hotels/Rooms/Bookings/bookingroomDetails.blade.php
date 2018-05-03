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
                    <img src="#" class="img-responsive"/>
                    <h2>{{$booking->id}}</h2>


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
                                    <img src="#"
                                         class="img-responsive box-v7-avatar pull-left"/>
                                    <h4>{{$booking->id}}</h4>
                                    <a href="{{route('bookingsRoom.edit',$booking->id)}}"><span
                                                class="label label-warning">Edit</span></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12 padding-0 box-v7-body">
                            {{--                            {!! $booking->description !!}--}}

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
                                            <h5 class="media-heading">Room ID</h5>
                                            {{$booking->room_id}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-globe icons" style="font-size:2em;"> </span>
                                        </div>

                                        <div class="media-body">
                                            <h5 class="media-heading">Booking Status</h5>
                                            {{$booking->booking_status}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-user icons" style="font-size:2em;"> </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">No of People</h5>
                                            {{ $booking->no_of_people}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-flag icons" style="font-size:2em;"> </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Start Date</h5>
                                            {{$booking->start_date}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-home icons" style="font-size:2em;"> </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">End Date</h5>
                                            {{$booking->end_date}}
                                        </div>
                                    </div>
                                    <hr/>

                                    <hr/>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-user icons" style="font-size:2em;"> </span>
                                        </div>

                                        <div class="media-body">
                                            <h5 class="media-heading">Booked By</h5>
                                            {{$booking->booking_done_by}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-phone icons" style="font-size:2em;"></span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">Phone No</h5>
                                            {{$booking->phone_no}}
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-envelope-letter icons" style="font-size:2em;"> </span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="media-heading">E-Mail ID</h5>
                                            {{ $booking->email}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer bg-white border-none">
                                <center>
                                    <input type="button" value="Download as PDF"
                                           class="btn btn-danger box-shadow-none"/>

                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="panel box-v3">
                    <div class="panel-heading bg-white border-none">
                        <h4>Traveller's Details</h4>
                    </div>
                    <div class="panel-body">
                        @php
                            $i=1
                        @endphp
                        @forelse($booking->bookedroomdetails as $booked)
                            <div class="media">
                                <div class="media-left">
                                    <span class="icon-envelope-letter icons" style="font-size:2em;"> </span>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Traveller {{$i}}</h5>
                                    {{ $booked->name}}<br/>
                                    {{ $booked->gender}}<br/>
                                    {{ $booked->dob}}<br/>
                                    {{ $booked->address}}<br/>
                                    {{ $booked->phone_no}}<br/>





                                    @php
                                        $i++
                                    @endphp
                                </div>
                            </div>


                        @empty
                            sorry booking not found.
                        @endforelse
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