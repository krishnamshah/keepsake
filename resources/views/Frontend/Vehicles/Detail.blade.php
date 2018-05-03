@extends('Frontend.layouts.app1')

@section('content')

    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">Tours</li>
        </ul>
        <div class="booking-item-details">

            <header class="booking-item-header">
                <div class="row">
                    <div class="col-md-9">
                        <h2 class="lh1em">{{$vehicle->name}}</h2>
                        <ul class="list list-inline text-small">
                            <li><a href="#">Type:</a>
                            </li>
                            <li> {{$vehicle->type}}</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <p class="booking-item-header-price">
                            <small>price</small>
                            <span class="text-lg">{{$vehicle->rate_perday}}</span>/day
                        </p>
                    </div>
                </div>
            </header>
            <div class="gap gap-small"></div>
            <div class="row row-wrap">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{Storage::URL($tour->image)}}" alt="Image Alternative text"
                                 title="Image Title">
                        </div>
                        <div class="col-md-7">
                            <div class="booking-item-price-calc">
                                <div class="row row-wrap">
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label>
                                                <input class="i-check" type="checkbox">Child Toddler Seat<span
                                                        class="pull-right"></span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input class="i-check" type="checkbox">Ski Rack<span class="pull-right"></span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input class="i-check" type="checkbox">Infant Child Seat<span
                                                        class="pull-right"></span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input class="i-check" type="checkbox">GPS Satellite<span
                                                        class="pull-right"></span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input class="i-check" type="checkbox">Show Chains<span
                                                        class="pull-right"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="list">
                                            <li>
                                                <p>Price Per Day <span>{{$vehicle->rate_perday}}</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p>Rental Price <span>{{$vehicle->rate_perday}}</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p>Equipment <span>$<span id="car-equipment-total"
                                                                          data-value=""></span></span>
                                                </p>
                                            </li>
                                            <li>
                                                <p>Rental Tolal <span>$<span id="car-total" data-value="">{{$vehicle->rate_perday}}</span></span>
                                                </p>
                                            </li>
                                        </ul>
                                        <div class="mfp-with-anim mfp-hide mfp-dialog mfp-search-dialog" id="search-dialog">
                                            <h3>Book</h3>
                                            <form method="get" action="{{route('vehicles.search')}}">
                                                {{csrf_field()}}
                                                <div class="input-daterange" data-date-format="yyyy-mm-dd">
                                                    <div class="row">
                                                        <div class="col-md-0">
                                                            <div class="form-group form-group-lg form-group-icon-left">
                                                                <input class="typeahead form-control" placeholder="City" type="hidden" name="id"
                                                                       value="{{$vehicle->id}}" >
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i
                                                                        class="fa fa-map-marker input-icon"></i>
                                                                <label>From</label>
                                                                <input class="typeahead form-control" placeholder="City or Point of Interest"
                                                                       type="text" name="from">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i
                                                                        class="fa fa-map-marker input-icon"></i>
                                                                <label>To</label>
                                                                <input class="typeahead form-control" placeholder="City or Point of Interest"
                                                                       type="text" name="to">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="input-daterange" data-date-format="yyyy-mm-dd">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i
                                                                                    class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                            <label>From</label>
                                                                            <input class="form-control" name="start" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i
                                                                                    class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                            <label>To</label>
                                                                            <input class="form-control" name="end" type="text">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                                            <label>Guests</label>
                                                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">


                                                                                <select class="form-control" name="no_of_People">
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                    <option value="9">9</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="11">11</option>
                                                                                    <option value="12">12</option>
                                                                                    <option value="13">13</option>
                                                                                    <option value="14">14</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary btn-lg" type="submit">Book</button>
                                            </form>
                                        </div>
                                        <a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out"><button class="btn btn-primary">Book</button></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-small">Arrive at your destination in style with this air-conditioned automatic. With
                        room for 4 passengers and 2 pieces of luggage, it's ideal for small groups looking to get from A
                        to B in comfort. Price can change at any moment so book now to avoid disappointment!</p>

                    <hr>
                    <div class="row row-wrap">
                        <div class="col-md-4">
                            <h5>Car Features</h5>
                            <ul class="booking-item-features booking-item-features-expand clearfix">
                                <li><i class="fa fa-male"></i><span class="booking-item-feature-title">Up to 4 Passengers</span>
                                </li>
                                <li><i class="im im-car-doors"></i><span
                                            class="booking-item-feature-title">3 Doors</span>
                                </li>
                                <li><i class="fa fa-briefcase"></i><span class="booking-item-feature-title">2 Pieces of Laggage</span>
                                </li>
                                <li><i class="im im-shift-auto"></i><span class="booking-item-feature-title">{{$vehicle->gare}} Transmission</span>
                                </li>
                                <li><i class="im im-diesel"></i><span
                                            class="booking-item-feature-title">Gas Vehicle</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h5>Default Equipment</h5>
                            <ul class="booking-item-features booking-item-features-expand clearfix">
                                <li><i class="im im-climate-control"></i><span class="booking-item-feature-title">Climate Control</span>
                                </li>
                                <li><i class="im im-stereo"></i><span
                                            class="booking-item-feature-title">Stereo CD/MP3</span>
                                </li>

                                <li><i class="im im-fm"></i><span class="booking-item-feature-title">FM Radio</span>
                                </li>
                                <li><i class="im im-lock"></i><span
                                            class="booking-item-feature-title">Power Door Locks</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h5>Pickup Features</h5>
                            <ul class="booking-item-features booking-item-features-expand booking-item-features-dark clearfix">
                                <li><i class="fa fa-plane"></i><span
                                            class="booking-item-feature-title">Terminal Pickup</span>
                                </li>
                                <li><i class="im im-meet"></i><span
                                            class="booking-item-feature-title">Meet and Greet</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="booking-item-deails-date-location">
                        <ul>
                            <li>
                                <h5>Location:{{$vehicle->locations}}</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="gap gap-small"></div>
                </div>
            </div>
        </div>
    </div>
@endsection