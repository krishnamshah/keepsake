@extends('Frontend.layouts.app1')

@section('content')
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a>
            </li>
            <li class="active">{{$data['from']}}</li>
        </ul>
        <div class="mfp-with-anim mfp-hide mfp-dialog mfp-search-dialog" id="search-dialog">
            <h3>Search for Vehicle</h3>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-group-lg form-group-icon-left"><i
                                    class="fa fa-map-marker input-icon input-icon-highlight"></i>
                            <label>Pick-up From</label>
                            <input class="typeahead form-control" placeholder="City, Airport" type="text"
                                   value="{{$data['from']}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-lg form-group-icon-left"><i
                                    class="fa fa-map-marker input-icon input-icon-highlight"></i>
                            <label>Drop-off To</label>
                            <input class="typeahead form-control" placeholder="City, Airport" type="text"
                                   value="{{$data['to']}}">
                        </div>
                    </div>
                </div>
                <div class="input-daterange" data-date-format="yyyy-mm-dd">
                    {{--<div class="row">--}}
                        <div class="col-md-3">
                            <div class="form-group form-group-lg form-group-icon-left"><i
                                        class="fa fa-calendar input-icon input-icon-highlight"></i>
                                <label>Pick-up Date</label>
                                <input class="form-control" name="start" type="text" value="{{$data['start']}}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group form-group-lg form-group-icon-left"><i
                                        class="fa fa-calendar input-icon input-icon-highlight"></i>
                                <label>Drop-off Date</label>
                                <input class="form-control" name="end" type="text" value="{{$data['end']}}">
                            </div>
                        </div>

                    </div>
                {{--</div>--}}
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
                <button class="btn btn-primary btn-lg" type="submit">Search for Vehicles</button>
            </form>
        </div>
        <h3 class="booking-title">Rental Vehicles in {{$data['from']}} on {{$data['start']}} - {{$data['end']}}
            <small><a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Change search</a></small>
        </h3>
        <div class="row">
            {{--<div class="col-md-3">--}}
            {{--<aside class="booking-filters text-white">--}}
            {{--<h3>Filter By:</h3>--}}
            {{--<ul class="list booking-filters-list">--}}
            {{--<li>--}}
            {{--<h5 class="booking-filters-title">Passengers Quantity</h5>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">2 Passengers (11)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">3 Passengers (2)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">4 Passengers (17)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">4+ Passengers (60)</label>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<h5 class="booking-filters-title">Price </h5>--}}
            {{--<input type="text" id="price-slider">--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<h5 class="booking-filters-title">Car group</h5>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Economy (20)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Compact (20)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Midsize (11)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Stabdart (12)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Fullsize (5)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Premium/Luxury (3)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Minivan (5)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Crossover (10)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">SUV (12)</label>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<h5 class="booking-filters-title">Transmission</h5>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Automatic (80)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Manual (25)</label>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<h5 class="booking-filters-title">Engine</h5>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Gas (60)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Diesel (35)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Hybrid (22)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Electric (15)</label>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<h5 class="booking-filters-title">Equipment</h5>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Climate Control (47)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Air Conditioning (66)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Satellite Navigation (30)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Power Door Locks (35)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">FM Radio (70)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Stereo CD/MP3 (53)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Tilt Steering Wheel (42)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Power Windows (68)</label>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<h5 class="booking-filters-title">Pickup Options</h5>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Terminal Pickup (80)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Shuttle Bus to Car (25)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Meet and Greet (13)</label>--}}
            {{--</div>--}}
            {{--<div class="checkbox">--}}
            {{--<label>--}}
            {{--<input class="i-check" type="checkbox">Car with Driver (7)</label>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</aside>--}}
            {{--</div>--}}
            <div class="col-md-9">
                <div class="nav-drop booking-sort">
                    <h5 class="booking-sort-title"><a href="#">Sort: Price (low to high)<i class="fa fa-angle-down"></i><i
                                    class="fa fa-angle-up"></i></a></h5>
                    <ul class="nav-drop-menu">
                        <li><a href="#">Price (high to low)</a>
                        </li>
                        <li><a href="#">Car Name (A-Z)</a>
                        </li>
                        <li><a href="#">Car Name (Z-A)</a>
                        </li>
                        <li><a href="#">Car Type</a>
                        </li>
                    </ul>
                </div>
                <div class="row row-wrap">
                    @forelse($search as $sea)
                    <div class="col-md-4">
                        <div class="thumb">
                            <header class="thumb-header">
                                <a href="#">
                                    <img src="{{Storage::URL($sea->image)}}"
                                         alt="{{$sea->image}}" title="Image Title">
                                </a>
                            </header>
                            <div class="thumb-caption">
                                <h5 class="thumb-title"><a class="text-darken" href="{{route('vehicle.book',[$sea->id])}}">{{$sea->name}}</a></h5>
                                <small>Premium</small>
                                <ul class="booking-item-features booking-item-features-small booking-item-features-sign clearfix mt5">
                                    <li rel="tooltip" data-placement="top" title="Passengers"><i class="fa fa-male"></i><span
                                                class="booking-item-feature-sign">x {{$sea->no_of_People}}</span>
                                    </li>
                                    <li rel="tooltip" data-placement="top" title="Electric Vehicle"><i class="im im-electric"></i><span
                                                class="booking-item-feature-sign">{{$sea->fule_option}}</span>
                                    </li>
                                    <li rel="tooltip" data-placement="top" title="Baggage Quantity"><i
                                                class="fa fa-briefcase"></i><span
                                                class="booking-item-feature-sign">{{$sea->driving_option}}</span>
                                    </li>
                                    <li rel="tooltip" data-placement="top" title="Automatic Transmission"><i
                                                class="im im-shift-auto"></i><span class="booking-item-feature-sign">{{$sea->gare}}</span>
                                    </li>

                                </ul>
                                <p class="text-darken mb0 text-color">{{$sea->rate_perday}}
                                    <small> /day</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    @empty
                        Sorry no result found!!
                    @endforelse
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <small>Rental cars in {{$data['from']}}. &nbsp;&nbsp;Showing 1 – 15</small>
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

                </div>
            </div>
        </div>
        <div class="gap"></div>
    </div>

@endsection