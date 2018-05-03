@extends('Frontend.layouts.app1')

@section('content')
    <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">{{$hotel->city}}</a>
                </li>
                <li><a href="#">{{$hotel->hotel_name}}</a>
                </li>
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
            <h3 class="booking-title">Rooms - {{$hotel->hotel_name}} <small><a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Change search</a></small></h3>
            <div class="row">
                <div class="col-md-3">
                    <aside class="booking-filters text-white">
                        <h3>Filter By:</h3>
                        <ul class="list booking-filters-list">
                            <li>
                                <h5 class="booking-filters-title">Price</h5>
                                <input type="text" id="price-slider">
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Star Rating</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">5 star (220)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">4 star (112)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">3 star (75)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">2 star (60)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">1 star (20)</label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Facility</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Wi-Fi (55)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Parking (264)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Airport Shuttle (137)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Fitness Center (15)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Non-Smoking Rooms (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Indoor Pool (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Spa (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Family Rooms (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Pet Friendly (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Restaurant (20)</label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Room Facility</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Air conditioning (55)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Bathtub (264)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Flat-screen TV (137)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Kitchen/kitchenette (15)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Patio (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Soundproof (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Spa tub (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Terrace (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">View (20)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox">Washing machine (20)</label>
                                </div>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="nav-drop booking-sort">
                        <h5 class="booking-sort-title"><a href="#">Sort: Aviability<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a></h5>
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
                    @forelse($search as $sea)
                    <ul class="booking-list">
                        <li>
                            <div class="booking-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="booking-item-img-wrap">
                                            <img src="#" alt="Room Image" title="hotel 2">
                                            <div class="booking-item-img-num"><i class="fa fa-picture-o"></i>10</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <h5 class="booking-item-title">{{$sea->name}}</h5>
                                        <p class="booking-item-address"><i class="fa fa-map-marker"></i>Max Capacity : {{$sea->no_of_people}}</p>
                                    </div>
                                    <div class="col-md-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">{{$sea->room_cost}}</span><span>/night</span><a href="{{route('room.booking',[$sea->id])}}"><span class="btn btn-primary">Book Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                    @empty
                        Sorry no result found!!
                    @endforelse
                    <div class="row">
                        <div class="col-md-6">

                            </p>
                            {{--<ul class="pagination">--}}
                                {{--<li class="active"><a href="#">1</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">2</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">3</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">4</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">5</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">6</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">7</a>--}}
                                {{--</li>--}}
                                {{--<li class="dots">...</li>--}}
                                {{--<li><a href="#">43</a>--}}
                                {{--</li>--}}
                                {{--<li class="next"><a href="#">Next Page</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Not what you're looking for? <a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Try your search again</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>


@endsection