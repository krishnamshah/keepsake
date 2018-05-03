@extends('Frontend.layouts.app1')

@section('content')

    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a>
            </li>
            <li>{{$tour->name}}
            </li>

        </ul>
        <div class="booking-item-details">
            <header class="booking-item-header">
                <div class="row">
                    <div class="col-md-9">
                        <h2 class="lh1em">{{$tour->name}}</h2>
                        <p class="lh1em text-small"><i class="fa fa-map-marker"></i> {{$tour->description}}</p>
                        <ul class="list list-inline text-small">
                            <li><a href="#"><i class="fa fa-envelope"></i> {{$tour->duration}}</a>
                            </li>
                            <li><a href="#"><i class="fa fa-home"></i>Total Travellers: {{$tour->group_size}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <p class="booking-item-header-price"><small>price</small>  <span class="text-lg">{{$tour->price}}</span>
                        </p>
                    </div>
                </div>
            </header>
            <div class="row">
                <div class="col-md-7">
                    <div class="tabbable booking-details-tabbable">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-camera"></i>Photos</a>
                            </li>
                            <li><a href="#google-map-tab" data-toggle="tab"><i class="fa fa-map-marker"></i>On the Map</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-1">
                                <div class="fotorama" data-allowfullscreen="true" data-nav="thumbs">
                                    {{--<img src="img\upper_lake_in_new_york_central_park_800x600.jpg" alt="Image Alternative text" title="Upper Lake in New York Central Park">--}}
                                    {{--<img src="img\new_york_at_an_angle_800x600.jpg" alt="Image Alternative text" title="new york at an angle">--}}
                                    {{--<img src="img\pictures_at_the_museum_800x600.jpg" alt="Image Alternative text" title="Pictures at the museum">--}}
                                    {{--<img src="img\plunklock_live_in_cologne_800x600.jpg" alt="Image Alternative text" title="Plunklock live in Cologne">--}}
                                    {{--<img src="img\amaze_800x600.jpg" alt="Image Alternative text" title="AMaze">--}}
                                    {{--<img src="img\old_no7_800x600.jpg" alt="Image Alternative text" title="Old No7">--}}
                                    {{--<img src="img\the_big_showoff-take_2_800x600.jpg" alt="Image Alternative text" title="The Big Showoff-Take 2">--}}
                                    {{--<img src="img\4_strokes_of_fun_800x600.jpg" alt="Image Alternative text" title="4 Strokes of Fun">--}}
                                    {{--<img src="img\me_with_the_uke_800x600.jpg" alt="Image Alternative text" title="Me with the Uke">--}}
                                    {{--<img src="img\trebbiano_ristorante_-_japenese_breakfast_800x600.jpg" alt="Image Alternative text" title="Trebbiano Ristorante - japenese breakfast">--}}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="google-map-tab">
                                <div id="map-canvas" style="width:100%; height:500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="booking-item-meta">
                        <h2 class="lh1em mt40">Exeptional!</h2>
                        {{--<div class="booking-item-rating">--}}
                            {{--<ul class="icon-list icon-group booking-item-rating-stars">--}}
                                {{--<li><i class="fa fa-star"></i>--}}
                                {{--</li>--}}
                                {{--<li><i class="fa fa-star"></i>--}}
                                {{--</li>--}}
                                {{--<li><i class="fa fa-star"></i>--}}
                                {{--</li>--}}
                                {{--<li><i class="fa fa-star"></i>--}}
                                {{--</li>--}}
                                {{--<li><i class="fa fa-star"></i>--}}
                                {{--</li>--}}
                            {{--</ul><span class="booking-item-rating-number"><b>4.7</b> of 5 <small class="text-smaller">guest rating</small></span>--}}
                            {{--<p><a class="text-default" href="#">based on 1535 reviews</a>--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    </div>
                    <div class="gap gap-small">
                        <h3>Tour Itinerary</h3>
                        <p>{{$tour->itinerary}}</p>
                    </div>

                            <div class="mfp-with-anim mfp-hide mfp-dialog mfp-search-dialog" id="search-dialog">
                                <h3>Search for Tours</h3>
                                <form method="get" action="{{route('tours.search')}}">
                                {{csrf_field()}}
                                    <div class="input-daterange" data-date-format="yyyy-mm-dd">
                                        <div class="row">
                                            <div class="col-md-0">
                                                <div class="form-group form-group-lg form-group-icon-left">
                                                    <input class="typeahead form-control" placeholder="City" type="hidden" name="id"
                                                          value="{{$tour->id}}" >
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
        <div class="gap"></div>

        <div class="row row-wrap">

            <div class="col-md-8">
                <h4>Activities Near</h4>
                <ul class="booking-list">
                    <li>
                        <div class="booking-item booking-item-small">
                            @forelse($tours as $sea)
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="img\upper_lake_in_new_york_central_park_800x600.jpg" alt="Image Alternative text" title="Upper Lake in New York Central Park">
                                </div>
                                <div class="col-xs-5">
                                    <h5 class="booking-item-title">{{$sea['name']}}</h5>
                                    <h6 class="booking-item-address">{{$sea['itinerary']}}</h6>
                                </div>
                                <div class="col-xs-3"><span class="booking-item-price">{{$sea['price']}}</span>
                                </div>
                            </div>

                            @empty
                                Sorry no result found!!
                            @endforelse
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <div class="gap gap-small"></div>
    </div>




@endsection
