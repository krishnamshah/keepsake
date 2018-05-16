@extends('Backend._Layouts.master_layout')
@section('css')

@endsection
@section('content')

    <div id="content">
        <div class="tabs-wrapper text-center">
            <div class="panel box-shadow-none text-left content-header">
                <div class="panel-body" style="padding-bottom:10px;">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Create User {{ Auth::user()->name }} !!!</h3>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <!-- start: Content -->
            <div class="col-md-12 padding-0">

                <div class="column">
                    <h1 class="title">View User Details</h1>
                </div> <!-- end of column -->

                <div class="column">
                    <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right"><i
                                class="fa fa-user m-r-10"></i> Edit User</a>
                </div>
            </div>
            <hr>

            <div class="card">
                <div class="card-content">
                    <div class="field">
                        <label for="name" class="label">Name</label>
                        <p>{{$user->name}}</p>
                    </div>

                    <div class="field">
                        <div class="field">
                            <label for="email" class="label">Email</label>
                            <p>{{$user->email}}</p>
                        </div>
                    </div>

                    <div class="field">
                        <div class="field">
                            <label for="email" class="label">Roles</label>
                            <ul>
                                {{$user->roles->count() == 0 ? 'This user has not been assigned any roles yet' : ''}}
                                @foreach ($user->roles as $role)
                                    <li>{{$role->display_name}} ({{$role->description}})</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection