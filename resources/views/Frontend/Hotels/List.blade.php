@extends('Frontend.layouts.app1')

@section('content')

    <div class="container">
        <h1 class="page-title">Search for Hotels</h1>
    </div>




    <div class="container">
        <form method="get" action="{{route('hotel.result')}}">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group form-group-lg form-group-icon-left"><i
                                class="fa fa-map-marker input-icon"></i>
                        <label>Where are you going?</label>
                        <input class="typeahead form-control" placeholder="City" type="text" name="city">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="input-daterange" data-date-format="yyyy-mm-dd">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group form-group-lg form-group-icon-left"><i
                                            class="fa fa-calendar input-icon input-icon-highlight"></i>
                                    <label>Check-in</label>
                                    <input class="form-control" name="start" type="text">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-lg form-group-icon-left"><i
                                            class="fa fa-calendar input-icon input-icon-highlight"></i>
                                    <label>Check-out</label>
                                    <input class="form-control" name="end" type="text">
                                </div>
                            </div>

                            <div class="col-md-3">
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
            <button class="btn btn-primary btn-lg" type="submit">Search for Hotels</button>
        </form>
        <div class="gap gap-small"></div>
        <h3 class="mb20">Hotels</h3>
        <div class="row row-wrap">
            @forelse($hotel as $sea)
            <div class="col-md-3">
                {{$sea->hotel_name}}
                <div class="thumb">
                    <a class="hover-img" href="{{route('hotel.detail',[$sea->id])}}">
                        <img src="{{URL::to('storage/'.$sea->hotel_logo)}}" alt="{{$sea->name}}" title="AMaze">
                        <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                            <div class="text-small">
                                <h5>{{$sea->street}},{{$sea->city}},{{$sea->province}}</h5>
                                <p>Rooms</p>
                                <p class="mb0"> @for($i=1;$i<=$sea['hotel_star_rating'];$i++)
                                    <i class="fa fa-star"></i>
                                    
                                    @endfor
                                    </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @empty
                Sorry no result found!!
            @endforelse
        </div>

        <div class="gap gap-small"></div>
    </div>


@endsection


