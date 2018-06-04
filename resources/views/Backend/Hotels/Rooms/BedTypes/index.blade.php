@extends('Backend._Layouts.master_layout')
@section('css')
    <!-- plugins -->
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/animate.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/nouihotel.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/select2.min.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/ionrangehotel/ion.rangeSlider.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/ionrangehotel/ion.rangeSlider.skinFlat.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/bootstrap-material-datetimepicker.css')}}"/>
@endsection

@section('content')

    <div id="content">
        <div class="tabs-wrapper text-center">
            <div class="panel box-shadow-none text-left content-header">
                <div class="panel-body" style="padding-bottom:0px;">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Hotel services</h3>
                        {{--<p class="animated fadeInDown">--}}
                        {{--Ui Element <span class="fa-angle-right fa"></span> Tabs & Panels--}}
                        {{--</p>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-12">

                <div role="tabpanel" class="tab-pane fade active in" id="tabs-area-demo" aria-labelledby="tabs1">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="col-md-12 tabs-area">
                                <div class="liner"></div>
                                <ul class="nav nav-tabs nav-tabs-v5" id="tabs-demo6">
                                    <li class="active">Hotel Room Facilites
                                        <a href="#tabs-demo6-area1" data-toggle="tab" title="Hotels">
                          <span class="round-tabs one">
                            <i class="glyphicon glyphicon-plane"></i>
                          </span>
                                        </a>
                                    </li>
                                    <li>Add New Hotel Room Faciliites
                                        <a href="#tabs-demo6-area2" data-toggle="tab" title="Add New Hotel">
                                            <span class="round-tabs two"><i class="glyphicon glyphicon-user"></i></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content tab-content-v5">
                                    <div class="tab-pane fade in active" id="tabs-demo6-area1">
                                        @include('Backend.Hotels.Rooms.BedTypes.list')
                                    </div>
                                    <div class="tab-pane fade" id="tabs-demo6-area2">
                                        @include('Backend.Hotels.Rooms.BedTypes.create')

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>

@endsection

@section('script')
    <!-- plugins -->
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/moment.min.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/jquery.knob.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/ion.rangeSlider.min.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/bootstrap-material-datetimepicker.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/jquery.nicescroll.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/jquery.mask.min.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/select2.full.min.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/nouihotel.min.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/jquery.validate.min.js')}}"></script>


    <!-- custom -->
    <script src="{{URL::asset('BackendTheme/asset/js/main.js')}}"></script>

    <!-- end: Javascript -->
@endsection