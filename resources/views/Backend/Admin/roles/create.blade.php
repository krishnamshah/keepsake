@extends('Backend._Layouts.master_layout')

@section('content')

    <div id="content">
        <div class="tabs-wrapper text-center">
            <div class="panel box-shadow-none text-left content-header">
                <div class="panel-body" style="padding-bottom:10px;">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Create New Role</h3>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <!-- start: Content -->
            <div class="col-md-12 padding-0">

                <form action="{{route('roles.store')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="columns">
                        <div class="column">
                            <div class="box">
                                <article class="media">
                                    <div class="media-content">
                                        <div class="content">
                                            <h2 class="title">Role Details:</h1>
                                                <div class="field">
                                                    <p class="control">
                                                        <label for="display_name" class="label">Name (Human
                                                            Readable)</label>
                                                        <input type="text" class="input" name="display_name"
                                                               value="{{old('display_name')}}" id="display_name">
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <p class="control">
                                                        <label for="name" class="label">Slug (Can not be
                                                            changed)</label>
                                                        <input type="text" class="input" name="name"
                                                               value="{{old('name')}}" id="name">
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <p class="control">
                                                        <label for="description" class="label">Description</label>
                                                        <input type="text" class="input" value="{{old('description')}}"
                                                               id="description" name="description">
                                                    </p>
                                                </div>
                                                <input type="hidden" :value="permissionsSelected" name="permissions">
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column">
                            <div class="box">
                                <article class="media">
                                    <div class="media-content">
                                        <div class="content">
                                            <h2 class="title">Permissions:</h1>
                                                @forelse($permissions as $permission)

                                                    <input type="checkbox" value="{{$permission->id}}" }}
                                                           name="permissions[]">
                                                    {{$permission->display_name}}
                                                    <em>({{$permission->description}})</em>
                                                    <br/>
                                                @empty
                                                    Sorry No Permissions Are avilable
                                            @endforelse

                                        </div>
                                    </div>
                                </article>
                            </div> <!-- end of .box -->

                            <button class="button is-primary">Create new User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection