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
                        Booking ID: {{$data['id']}}<span class="fa-angle-right fa"></span><br/>
                        Vehicle ID: {{$data['id']}}<span class="fa-angle-right fa"></span><br/>
                        Start Date: {{$data['start_date']}}
                        <br/>End Date: {{$data['end_date']}} <span class="fa-angle-right fa">
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
                                    <th>Booking ID</th>
                                    <th>Vehicle ID</th>
                                    <th>Start date</th>
                                    <th>End Date</th>
                                    <th>Number of Travellers</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <form action="" method="post">
                                    @forelse($search as $sea)
                                        <tr>
                                            <td>{{$sea->id}}</td>
                                            <td><input type="hidden" name="bookingVehicles_vehicle_id"
                                                       value="{{$sea->booking_id}}"> {{$sea->Vehicle_id}}</td>
                                            <td><input type="hidden" name="vehicles_itinerary"
                                                       value="{{$sea->itinerary}}">{{$sea->itinerary}}</td>
                                            <td><input type="hidden" name="bookingVehicles_start_date"
                                                       value="{{$sea->start_date}}">{{$sea->start_date}}</td>
                                            <td><input type="hidden" name="bookingVehicles_end_date"
                                                       value="{{$sea->end_date}}">{{$sea->end_date}}</td>
                                            <td><input type="hidden" name="bookingVehicle_no_of_people"
                                                       value="{{$sea->no_of_people}}">{{$sea->no_of_people}}</td>
                                            <td>
                                                {{--<input type="submit" class="btn btn-circle btn-sm" value="">--}}
                                                <a href="#"><span class="label label-warning">Details</span></a>

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