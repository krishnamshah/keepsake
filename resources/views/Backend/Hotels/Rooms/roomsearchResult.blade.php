@extends('Backend._Layouts.master_layout')
@section('css')
    <!-- plugins -->
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/datatables.bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/animate.min.css')}}"/>
@endsection
@section('content')


    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">Search Result</h3>

                    <p class="animated fadeInDown">
                        Location [City]: {{$data['location_city']}}
                        <br/>
                        No. of People: {{$data['no_of_people']}}
                        <br/>Start Date: {{$data['start_date']}}
                        <br/>End Date: {{$data['end_date']}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12 top-20 padding-0">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading"><h3>Search Results</h3></div>
                    <div class="panel-body">
                        <div class="responsive-table">
                            <table id="datatables-example" class="table table-striped table-bordered"
                                   width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Room Name</th>
                                    <th>Hotel Id</th>
                                    <th>Type</th>
                                    <th>Extra Bed Upto</th>
                                    <th>Rate/Extra Bed</th>
                                    <th>Room Facility</th>
                                    <th>Cost / Day</th>
                                    <th>Cost Includes Excludes</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                <form action="" method="post">
                                    @forelse($search as $sea)
                                        <tr>
                                            <td>{{$sea->name}}</td>
                                            <td><input type="hidden" name="name"
                                                       value="{{$sea->name}}"> {{$sea->name}}</td>

                                            <td><input type="hidden" name="hotel_id"
                                                       value="{{$sea->hotel_id}}"> {{$sea->hotel_id}}</td>
                                            <td><input type="hidden" name="type"
                                                       value="{{$sea->type}}">{{$sea->type}}</td>
                                            <td><input type="hidden" name="extra_bed_upto"
                                                       value="{{$sea->extra_bed_upto}}">{{$sea->extra_bed_upto}}</td>
                                            <td><input type="hidden" name="rate_per_extra_bed"
                                                           value="{{$sea->rate_per_extra_bed}}">{{$sea->rate_per_extra_bed}}</td>
                                            <td><input type="hidden" name="room_facility"
                                                           value="{{$sea->room_facility}}">{{$sea->room_facility}}</td>

                                            <td><input type="hidden" name="room_rate"
                                                       value="{{$sea->room_rate}}">{{$sea->room_rate}}</td>
                                            <td><input type="hidden" name="cost_include_exclude"
                                                       value="{{$sea->cost_include_exclude}}">{{$sea->cost_include_exclude}}</td>
                                            <td><input type="hidden" name="image"
                                                       value="{{$sea->image}}">{{$sea->image}}</td>
                                            <td>
                                                <input type="submit" class="btn btn-circle btn-sm" value="Book">
                                                <a href="#"><span class="label label-warning">Room Details</span></a>

                                            </td>
                                        </tr>
                                    @empty
                                        <td>Sorry no result found</td>
                                    @endforelse

                                </form>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: content -->
@endsection
@section('script')
    <!-- plugins -->
    <script src="{{URL::to('BackendTheme/asset/js/plugins/moment.min.js')}}"></script>
    <script src="{{URL::to('BackendTheme/asset/js/plugins/jquery.datatables.min.js')}}"></script>
    <script src="{{URL::to('BackendTheme/asset/js/plugins/datatables.bootstrap.min.js')}}"></script>
    <script src="{{URL::to('BackendTheme/asset/js/plugins/jquery.nicescroll.js')}}"></script>


    <!-- custom -->
    <script src="{{URL::to('BackendTheme/asset/js/main.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatables-example').DataTable();
        });
    </script>
    <!-- end: Javascript -->
@endsection