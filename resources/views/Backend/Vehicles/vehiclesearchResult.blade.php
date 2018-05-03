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
                        Location:<br>
                        From: {{$data['from']}}
                        To: {{$data['to']}}
                        <br/>
                        No. of Passenger: {{$data['no_of_People']}}
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
                                    <th>Vehicle Name</th>
                                    <th>Vehicle Type</th>
                                    <th>Description</th>
                                    <th>Transmission Type</th>
                                    <th>2W/4W</th>
                                    <th>Fuel Option</th>
                                    <th>Driving Option</th>
                                    <th>No Of Passengers</th>
                                    <th>Image</th>
                                    <th>Seat Pattern</th>
                                    <th>Rate Per day</th>
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
                                            <td><input type="hidden" name="type"
                                                       value="{{$sea->type}}">{{$sea->type}}</td>
                                            <td><input type="hidden" name="description"
                                                       value="{{$sea->description}}">{{$sea->description}}</td>
                                            <td><input type="hidden" name="driving_option"
                                                           value="{{$sea->driving_option}}">{{$sea->driving_option}}</td>
                                            <td><input type="hidden" name="fule_option"
                                                           value="{{$sea->fule_option}}">{{$sea->fule_option}}</td>

                                            <td><input type="hidden" name="diving_option"
                                                       value="{{$sea->diving_option}}">{{$sea->diving_option}}</td>
                                            <td><input type="hidden" name="no_of_People"
                                                       value="{{$sea->no_of_People}}">{{$sea->no_of_People}}</td>
                                            <td><input type="hidden" name="image"
                                                       value="{{$sea->image}}">{{$sea->image}}</td>
                                            <td><input type="hidden" name="sit_pattern"
                                                       value="{{$sea->sit_pattern}}">{{$sea->sit_pattern}}</td>

                                            <td><input type="hidden" name="rate_perday"
                                                       value="{{$sea->rate_perday}}">{{$sea->rate_perday}}</td>

                                            <td>
                                                <a href="{{route('bookingsVehicle.add',[$sea->id,$data['type'],$data['no_of_People'],$data['start_date'],$data['end_date']])}}"><input type="submit" class="btn btn-circle btn-sm" value="Book"></a>
                                                <a href="{{route('vehicles.details',[$sea->id])}}"><span class="label label-warning">Vehicle Details</span></a>

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