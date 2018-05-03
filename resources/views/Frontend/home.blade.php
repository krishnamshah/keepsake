@extends('Frontend.layouts.app')

@section('content')
    <div class="container">
        @include('Frontend.layouts._includes.search')
        <div class="row">
            @include('Frontend.Home.trendy')
            @include('Frontend.Home.hot')
            @include('Frontend.Home.special')
        </div>
        <div class="gap gap-small"></div>
       @include('Frontend.Home.top-distination')
        <div class="gap gap-small"></div>
    </div>
@endsection
