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
                        Location: <b>{{$data['tag']}}</b>
                        <br/>Start Date: <b>{{$data['start_date']}}</b>
                        <br/>End Date: <b>{{$data['end_date']}}</b>
                        <br/>Number of People: <b>{{$data['no_of_people']}}</b>
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
                                    <th>Package</th>
                                    <th>Description</th>
                                    <th>Itinerary</th>
                                    <th>Duration</th>
                                    <th>Price</th>
                                    <th>Best time to visit</th>
                                    <th>Image</th>
                                    <th>Cost</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <form action="" method="post">
                                    @forelse($search as $sea)
                                        <tr>
                                            <td>{{$sea->name}}</td>
                                            <td><input type="hidden" name="pages_description"
                                                       value="{{$sea->description}}"> {{$sea->description}}</td>
                                            <td><input type="hidden" name="pages_itinerary"
                                                       value="{{$sea->itinerary}}">{{$sea->itinerary}}</td>
                                            <td><input type="hidden" name="pages_duration"
                                                       value="{{$sea->duration}}">{{$sea->duration}}</td>
                                            @if($data['no_of_people']==1)
                                                <td><input type="hidden" name="pages_price"
                                                           value="{{$sea->price}}">{{$sea->price}}</td>
                                            @else
                                                <td><input type="hidden" name="pages_price"
                                                           value="{{$sea->group_rate}}">{{$sea->group_rate}}</td>
                                            @endif
                                            <td><input type="hidden" name="pages_best_time"
                                                       value="{{$sea->best_time}}">{{$sea->best_time}}</td>
                                            <td><input type="hidden" name="pages_image"
                                                       value="{{$sea->image}}">{{$sea->image}}</td>
                                            <td><input type="hidden" name="pages_cost_includes_excludes"
                                                       value="{{$sea->cost_includes_excludes}}">{{$sea->cost_includes_excludes}}</td>

                                            <td>
                                                <a href="{{route('bookingsPage.add',[$sea->id,$data['tag'],$data['start_date'],$data['end_date'],$data['no_of_people']])}}"><input type="submit" class="btn btn-circle btn-sm" value="Book"></a>
                                                <a href="{{route('pages.details',$sea->id)}}"><span class="label label-warning">Page Details</span></a>

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