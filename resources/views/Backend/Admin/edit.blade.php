@extends('Backend._Layouts.master_layout')
@section('css')
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/simple-line-icons.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/animate.min.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/fullcalendar.min.css')}}"/>
@endsection
@section('content')
    <div id="content">
        <div class="col-md-12 padding-0">
            <div class="column">
                <h1 class="title">Edit User</h1>
            </div>
        </div>
        <hr class="m-t-0">

        <div class="columns">
            <div class="column">
                <form action="{{route('users.update', $user->id)}}" method="POST">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    <div class="field">
                        <label for="name" class="label">Name:</label>
                        <p class="control">
                            <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
                        </p>
                    </div>

                    <div class="field">
                        <label for="email" class="label">Email:</label>
                        <p class="control">
                            <input type="text" class="input" name="email" id="email" value="{{$user->email}}" readonly>
                        </p>
                    </div>

                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <p class="control">
                            <input type="password" class="input" name="password" id="password">
                        </p>
                    </div>

                    <button class="button is-primary">Edit User</button>
                </form>
            </div>
        </div>

    </div> <!-- end of .flex-container -->
@endsection