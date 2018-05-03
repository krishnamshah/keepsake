@extends('Frontend.layouts.app1')

@section('content')
    <div class="container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a>
                </li>
                <li class="active">{{$data['city']}}</li>
            </ul>
            <div class="mfp-with-anim mfp-hide mfp-dialog mfp-search-dialog" id="search-dialog">
                <h3>Search for Hotel</h3>
                <form method="get" action="{{route('hotel.result')}}">
                    <div class="form-group form-group-lg form-group-icon-left"><i
                                class="fa fa-map-marker input-icon input-icon-highlight"></i>
                        <label>Where are you going?</label>
                        <input class="typeahead form-control" placeholder="City, Airport, Point of Interest" type="text"
                               value="{{$data['city']}}">
                    </div>
                    <div class="input-daterange" data-date-format="M d, D">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group form-group-lg form-group-icon-left"><i
                                            class="fa fa-calendar input-icon input-icon-highlight"></i>
                                    <label>Check-in</label>
                                    <input class="form-control" name="start" type="text" value="{{$data['start']}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group form-group-lg form-group-icon-left"><i
                                                class="fa fa-calendar input-icon input-icon-highlight"></i>
                                        <label>Check-out</label>
                                        <input class="form-control" name="end" type="text" value="{{$data['end']}}">
                                </div>
                            </div>
                            <div class=" col-md-3">
                                        <div class="form-group form-group-lg form-group-select-plus">
                                            <label>Guests</label>
                                            <select class="form-control" name="no_of_People">
                                                @php
                                                for($i=1;$i<15;$i++){
                                                @endphp
                                                <option value="{{$i}}" {{($data['no_of_People']==$i)?"Selected":""}}>{{$i}}</option>
                                               @php
                                                   }
                                               @endphp
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <button class="btn btn-primary btn-lg" type="submit">Search for Hotels</button>
                </form>
            </div>
            <h3 class="booking-title">Hotels in {{$data['city']}} on [ {{$data['start']}} - {{$data['end']}} ] for {{$data['no_of_People']}} Guests
                <small><a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Change search</a></small>
            </h3>
            <div class="row">

                <div class="col-md-9">
                    <div class="nav-drop booking-sort">
                        <h5 class="booking-sort-title"><a href="#">Sort: Aviability<i class="fa fa-angle-down"></i><i
                                        class="fa fa-angle-up"></i></a></h5>
                        <ul class="nav-drop-menu">
                            <li><a href="#">Price (low to high)</a>
                            </li>
                            <li><a href="#">Price (hight to low)</a>
                            </li>
                            <li><a href="#">Ranking</a>
                            </li>
                            <li><a href="#">Distance</a>
                            </li>
                            <li><a href="#">Number of Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row row-wrap">
                        @forelse($search as $sea)
                        <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header">
                                    <a class="hover-img" href="#">
                                        <img src="{{Storage::URL($sea->hotel_logo)}}" alt="hotel_image" title="">

                                    </a>
                                </header>
                                <div class="thumb-caption">
                                    <ul class="icon-group text-tiny text-color">
                                        @for($i=1;$i<=$sea['hotel_star_rating'];$i++)
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        @endfor

                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                    </ul>
                                    <h5 class="thumb-title"><a class="text-darken" href="{{route('hotel.rooms',[$sea->id])}}">{{$sea['hotel_name']}}</a></h5>
                                    <p class="mb0">
                                        <small>{{$sea['street']}}, {{$sea['city']}}, {{$sea['province']}}</small>
                                    </p>
                                    <p class="mb0 text-darken">starting from <span class="text-lg lh1em">$476</span>
                                        <small> avg/night</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @empty
                            Sorry no result found!!
                        @endforelse
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <small>521 hotels found in New York. &nbsp;&nbsp;Showing 1 – 15</small>
                            </p>
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                <li><a href="#">3</a>
                                </li>
                                <li><a href="#">4</a>
                                </li>
                                <li><a href="#">5</a>
                                </li>
                                <li><a href="#">6</a>
                                </li>
                                <li><a href="#">7</a>
                                </li>
                                <li class="dots">...</li>
                                <li><a href="#">43</a>
                                </li>
                                <li class="next"><a href="#">Next Page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Not what you're looking for? <a class="popup-text" href="#search-dialog"
                                                               data-effect="mfp-zoom-out">Try your search again</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>

@endsection