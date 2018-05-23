@extends('Backend._Layouts.master_layout')
@section('css')

    <!-- plugins -->
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/animate.min.css')}}"/>

    <!-- end: Css -->

@endsection
@section('content')

    <!-- start: content -->
    <div id="content">


        <div class="col-md-12" style="padding:20px;">
            <h1>Welcome {{ Auth::user()->name }} !!!</h1>
            @role('superadministrator')
            <a href="{{route('users.create')}}" class="button button-blue"><i class="fa fa-user-plus"></i>Create User
            </a>
        </div>
        @endrole
        <hr>
        @role(['superadministrator','administrator'])

        <table class="table">
            <thead>
            <tr>
                <th>SN</th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            </thead>
            <?php
            $i = 1;
            ?>
            <tbody>
            @foreach($users as $user)
                {{--                @if(Auth::User()->hasRole('administrator'))--}}
                <tr>
                    <th>{{$i++}}</th>
                    <th>{{$user->user_id}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th>
                    <td class="has-text-right"><a class="button is-outlined m-r-5"
                                                  href="{{route('users.show', $user->user_id)}}">View</a>
                        <a class="button is-outlined" href="{{route('users.edit',$user->user_id)}}">Edit</a>
                    </th>
                </tr>
                {{--@endif--}}
            @endforeach
            </tbody>
        </table>
        @endrole
    </div>
    <!-- end: content -->

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