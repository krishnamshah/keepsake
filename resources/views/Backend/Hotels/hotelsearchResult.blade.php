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
                        Location [city]: {{$data['location_city']}}<br/>
                        No. of People: {{$data['no_of_people']}}<br/>
                        Start Date: {{$data['start_date']}}<br/>
                        End Date: {{$data['end_date']}}<br/>


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
                                    <th>ID</th>
                                    <th>Hotel Name</th>
                                    <th>Address</th>
                                    <th>Location [City]</th>
                                    <th>Contact Person</th>
                                    <th>Phone Number 1</th>
                                    <th>Phone Number 2</th>
                                    <th>Rating</th>
                                    <th>Rating Agency</th>
                                    <th>Image</th>
                                    <th>Google Coordinate</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                <form action="" method="post">
                                    @forelse($search as $sea)
                                        <tr>
                                            <td>{{$sea->id}}</td>
                                            <td><input type="hidden" name="name"
                                                       value="{{$sea->name}}"> {{$sea->name}}</td>
                                            <td><input type="hidden" name="address"
                                                       value="{{$sea->address}}">{{$sea->address}}</td>
                                            <td><input type="hidden" name="location_city"
                                                       value="{{$sea->location_city}}">{{$sea->location_city}}</td>
                                            <td><input type="hidden" name="contact_person"
                                                       value="{{$sea->contact_person}}">{{$sea->contact_person}}</td>
                                            <td><input type="hidden" name="direct_contact"
                                                       value="{{$sea->direct_contact}}">{{$sea->direct_contact}}</td>
                                            <td><input type="hidden" name="phone"
                                                       value="{{$sea->phone}}">{{$sea->phone}}</td>
                                            <td><input type="hidden" name="hotel_star_rating"
                                                     value="{{$sea->hotel_star_rating}}">{{$sea->hotel_star_rating}}</td>
                                            <td><input type="hidden" name="rating_agency"
                                                   value="{{$sea->rating_agency}}">{{$sea->rating_agency}}</td>
                                            <td><input type="hidden" name="image"
                                                       value="{{$sea->image}}">{{$sea->image}}</td>
                                            <td><input type="hidden" name="google_coordinate"
                                                       value="{{$sea->google_coordinate}}">{{$sea->google_coordinate}}</td>


                                            <td>
                                                <a href="{{route('rooms.searchlist',[$sea->id,$data['location_city'],$data['start_date'],$data['end_date'],$data['no_of_people']])}}"><span class="label label-warning">Room Details</span></a>

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