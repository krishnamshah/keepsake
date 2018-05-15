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
            <form action="{{route('users.update', $user->id)}}" method="POST">
                {{method_field('PUT')}}
                {{csrf_field()}}
                <div class="column">

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

                    <div class="column">
                        <label for="roles" class="label">Roles:</label>
                        <input type="hidden" name="roles" :value="rolesSelected"/>

                        <b-checkbox-group v-model="rolesSelected">
                            @foreach ($roles as $role)
                                <div class="field">
                                    <b-checkbox :custom-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
                                </div>
                            @endforeach
                        </b-checkbox-group>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <hr/>
                        <button class="button is-primary is-pulled-right" style="width: 250px;">Edit User</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    </div> <!-- end of .flex-container -->
@endsection

@section('scripts')
    <script>

        var app = new Vue({
            el: '#app',
            data: {
                password_options: 'keep',
                rolesSelected: {!! $user->roles->pluck('id') !!}
            }
        });

    </script>
@endsection
