@extends('Backend._Layouts.master_layout')
@section('css')
    <!-- plugins -->
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/animate.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/nouislider.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/select2.min.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/ionrangeslider/ion.rangeSlider.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/bootstrap-material-datetimepicker.css')}}"/>
@endsection
@section('content')
    <div id="content">
        <div class="tabs-wrapper text-center">
            <div class="panel box-shadow-none text-left content-header">
                <div class="panel-body" style="padding-bottom:10px;">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Create Permission !!!</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <!-- start: Content -->
            <div class="col-md-12 padding-0">
                <form action="{{route('permissions.store')}}" method="POST">
                    {{csrf_field()}}


                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" name="display_name" id="display_name">
                        <span class="bar"></span>
                        <label>Permission Name:</label>
                    </div>


                    <div class="form-group form-animate-text" style="margin-top:40px !important;">

                        <input type="text" class="form-text" name="name" id="name">
                        <span class="bar"></span>
                        <label>Permission Slug:</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" name="description" id="description">
                        <span class="bar"></span>
                        <label>Permission Description:</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <button class="submit btn btn-success">Create Permission<</button>
                    </div>

                </form>
            </div>
        </div>

    </div> <!-- end of .flex-container -->
@endsection

@section('scripts')

@endsection
