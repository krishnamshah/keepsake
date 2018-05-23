@extends('Backend._Layouts.master_layout')
@section('css')
    <!-- plugins -->
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/animate.min.css')}}"/>

    <!-- end: Css -->
@endsection
@section('content')

    <div id="content">
        <div class="tabs-wrapper text-center">
            <div class="panel box-shadow-none text-left content-header">
                <div class="panel-body" style="padding-bottom:10px;">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Manage Permissions</h3>
                        <a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right"><i
                                    class="fa fa-user-plus m-r-10"></i> Create New Permission</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <!-- start: Content -->
            <div class="col-md-12 padding-0">

                <table class="table is-narrow">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <th>{{$permission->display_name}}</th>
                            <td>{{$permission->name}}</td>
                            <td>{{$permission->description}}</td>
                            <td class="has-text-right"><a class="button is-outlined is-small m-r-5"
                                                          href="{{route('permissions.show', $permission->id)}}">View</a><a
                                        class="button is-outlined is-small"
                                        href="{{route('permissions.edit', $permission->id)}}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div> <!-- end of .card -->
    </div>

@endsection
@section('script')
    <!-- plugins -->
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/moment.min.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/jquery.knob.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/jquery.nicescroll.js')}}"></script>


    <!-- custom -->
    <script src="{{URL::asset('BackendTheme/asset/js/main.js')}}"></script>

    <!-- end: Javascript -->
@endsection