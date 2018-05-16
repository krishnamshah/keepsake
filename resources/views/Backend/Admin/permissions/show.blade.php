@extends('Backend._Layouts.master_layout')
@section('css')

@endsection
@section('content')

    <div id="content">
        <div class="tabs-wrapper text-center">
            <div class="panel box-shadow-none text-left content-header">
                <div class="panel-body" style="padding-bottom:10px;">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">View Permission Details</h3>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <!-- start: Content -->
            <div class="col-md-12 padding-0">

                <a href="{{route('permissions.edit', $permission->id)}}" class="button is-primary is-pulled-right"><i
                            class="fa fa-edit m-r-10"></i> Edit Permission</a>


                <div class="columns">
                    <div class="column">
                        <div class="box">
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong>{{$permission->display_name}}</strong>
                                            <small>{{$permission->name}}</small>
                                            <br>
                                            {{$permission->description}}
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
