@extends('Backend._Layouts.master_layout')
@section('content')
    <div id="content">
        <div class="tabs-wrapper text-center">
            <div class="panel box-shadow-none text-left content-header">
                <div class="panel-body" style="padding-bottom:0px;">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Slider</h3>
                        {{--<p class="animated fadeInDown">--}}
                        {{--Ui Element <span class="fa-angle-right fa"></span> Tabs & Panels--}}
                        {{--</p>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-element">
                    <div class="col-md-12 padding-0">
                        <form method="post" enctype="multipart/form-data" action="{{route('HotelOffer.SaveHotels')}}">
                            @csrf
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <input type="hidden" class="form-text" required name="hotel_offer_id"
                                       value="{{$offer->id}}">
                                <span class="bar"></span>
                                <label>{{$offer->offername}}</label>
                            </div>

                            <div class="form-group"  style="margin-top:40px !important;">
                            <label>Hotel Offer Descriptions</label>
                        {!! $offer->description !!}
                    </div>
                    @forelse($hotels as $hotel)
                        <input type="checkbox" value="{{$hotel->id}}" name="hotel_id[]"> {{$hotel->name}}
                    @empty
                        Sorry No hotel is Currently listed in our Database
                    @endforelse

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input class="submit btn btn-success" value="Submit" type="submit">
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>

@endsection