@extends('Backend._Layouts.master_layout')

@section('content')
    <div id="content">
        <div class="col-md-12 padding-0">
            <div class="column">
                <h1 class="title">View User Details</h1>
            </div> <!-- end of column -->

            <div class="column">
                <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i> Edit User</a>
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
            </div>
        </div>
    </div>
@endsection