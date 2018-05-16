@extends('Backend._Layouts.master_layout')

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
                <h1 class="title">{{$role->display_name}}
                    <small class="m-l-25"><em>({{$role->name}})</em></small>
                </h1>
                <h5>{{$role->description}}</h5>
            </div>
            <div class="column">
                <a href="{{route('roles.edit', $role->id)}}" class="button is-primary is-pulled-right"><i
                            class="fa fa-user-plus m-r-10"></i> Edit this Role</a>
            </div>
        </div>
        <hr class="m-t-0">

        <div class="columns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h2 class="title">Permissions:</h1>
                                    <ul>
                                        @foreach ($role->permissions as $r)
                                            <li>{{$r->display_name}} <em class="m-l-15">({{$r->description}})</em></li>
                                        @endforeach
                                    </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
