@extends('Frontend.layouts.app1')

@section('content')

    <div class="container">
        <h1 class="page-title">Search for Vehicles</h1>
    </div>




    <div class="container">
        <form method="get" action="{{route('vehicle.result')}}">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group form-group-lg form-group-icon-left"><i
                                class="fa fa-map-marker input-icon"></i>
                        <label>From</label>
                        <input class="typeahead form-control" placeholder="City or Point of Interest"
                               type="text" name="from">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group form-group-lg form-group-icon-left"><i
                                class="fa fa-map-marker input-icon"></i>
                        <label>To</label>
                        <input class="typeahead form-control" placeholder="City or Point of Interest"
                               type="text" name="to">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group form-group-lg form-group-select-plus">
                        <label>Travellers</label>
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
                <div class="col-md-4">
                    <div class="input-daterange" data-date-format="yyyy-mm-dd">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-lg form-group-icon-left"><i
                                            class="fa fa-calendar input-icon input-icon-highlight"></i>
                                    <label>Pick-up Date</label>
                                    <input class="form-control" name="start" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-lg form-group-icon-left"><i
                                            class="fa fa-calendar input-icon input-icon-highlight"></i>
                                    <label>Drop-ff Date</label>
                                    <input class="form-control" name="end" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-lg" type="submit">Search for Vehicles</button>
        </form>
        <div class="gap gap-small"></div>
        <h3 class="mb20">Vehicles</h3>
        <div class="row row-wrap">
            @forelse($vehicle as $sea)
            <div class="col-md-3">
                {{$sea->vehicle_name}}
                <div class="thumb">
                    <a class="hover-img" href="{{route('vehicle.detail',[$sea->id])}}">
                        <img src="{{Storage::URL($sea->image)}}" alt="{{$sea->name}}" title="AMaze">
                        <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                            <div class="text-small">
                                <h5>{{$sea->name}}</h5>
                                <h5>{{$sea->type}},{{$sea->rate_perday}}</h5>

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


