
@extends('Frontend.layouts.app')

@section('content')
    <div class="container">

        <table class="table table-striped">
            <thead>
            <tr>
                <th>User ID</th>
                <th>Email</th>
                <th>Verified</th>
                <th>User Type</th>
                <th>User Status</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td> {{$user->email}}</td>

                <td>
                    @if($user->activation_token!=null)
                        Not Verified
                    @else
                        Verified
                    @endif
                </td>
                <td> {{$user->type}}</td>
                <td> {{$user->status}}</td>
                <td> View | Edit | Delete </td>

            </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection