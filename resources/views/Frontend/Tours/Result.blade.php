@extends('Frontend.layouts.app1')

@section('content')

    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a>
            </li>
            <li><a href="#">{{$data['tag']}}</a>
            </li>
        </ul>
        <div class="mfp-with-anim mfp-hide mfp-dialog mfp-search-dialog" id="search-dialog">
            <h3>Search for Tours</h3>
            <form>
                <div class="input-daterange" data-date-format="MM d, D">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-lg form-group-icon-left"><i
                                        class="fa fa-map-marker input-icon input-icon-highlight"></i>
                                <label>Loation</label>
                                <input class="typeahead form-control" placeholder="City" type="text"
                                       value="{{$data['tag']}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-lg form-group-icon-left"><i
                                        class="fa fa-calendar input-icon input-icon-highlight"></i>
                                <label>From</label>
                                <input class="form-control" name="start" type="text" value="{{$data['start']}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-lg form-group-icon-left"><i
                                        class="fa fa-calendar input-icon input-icon-highlight"></i>
                                <label>To</label>
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
                <button class="btn btn-primary btn-lg" type="submit">Search Again</button>
            </form>
        </div>
        <h3 class="booking-title">Tours: In {{$data['tag']}} on {{$data['start']}} - {{$data['start']}}
            <small><a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Change search</a></small>
        </h3>
        <div class="row">

            <div class="col-md-9">
                <div class="nav-drop booking-sort">
                    <h5 class="booking-sort-title"><a href="#">Sort: Ranking<i class="fa fa-angle-down"></i><i
                                    class="fa fa-angle-up"></i></a></h5>
                    <ul class="nav-drop-menu">
                        <li><a href="#">Name (A-Z)</a>
                        </li>
                        <li><a href="#">Name (Z-A)</a>
                        </li>
                        <li><a href="#">Number of Reviews</a>
                        </li>
                        <li><a href="#">Just Added</a>
                        </li>
                    </ul>
                </div>
                <ul class="booking-list">
                    @forelse($search as $sea)
                        <li>
                            <a class="booking-item" href="{{route('tour.book',[$sea->id])}}">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{Storage::URL($sea->image)}}" alt="{{$sea->name}}" title="AMaze">
                                    </div>
                                    <div class="col-md-5">

                                        <h5 class="booking-item-title">{{$sea->name}}</h5>
                                        <p class="booking-item-address"><i class="fa fa-map-marker"><span
                                                        class="nav-bot-space"></span></i>{{$sea->duration}}</p>
                                        <p class="booking-item-date"><i class="fa fa-search"><span
                                                        class="nav-bot-space"></span>
                                                <small>Best time:</small>{{$sea->best_time}}</i></p>
                                        <p class="booking-item-description">{{$sea->description}}</p>
                                    </div>
                                    <div class="col-md-3"><span class="booking-item-price">{{$sea->price}}</span>
                                        <button class="btn btn-primary">Book</button>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @empty
                                                Sorry no result found!!
@endforelse
                                                </ul>
                                                <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                <small>Things to do in {{$data['tag']}}. &nbsp;&nbsp;Showing 1 – 15</small>
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