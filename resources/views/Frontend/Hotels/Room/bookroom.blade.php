@extends('Frontend.layouts.app1')

@section('content')
    <div class="gap"></div>


    <div class="container">
        <form class="row" method="post" action="{{route('room.savebooking',[$room->id])}}">
            {{ csrf_field() }}
            <div class="col-md-8">
                <h3>Customer</h3>
                <p>Sign in to your <a href="#">Traveler account</a> for fast booking.</p>

                    @for($i=1;$i<=$data['no_of_People'];$i++)
                        <div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input class="form-control" type="text" name="booking_traveller_name[]">
                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <div class="input-daterange" data-date-format="MM d, D">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-icon-left"><i
                                                            class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                                    <label>Date Of Birth</label>
                                                    <input class="form-control" name="start[]" type="text" placeholder="yyyy-mm-dd">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                            <label class="btn btn-primary active"> M
                                                <input type="radio" name="booking_traveller_gender[<?php echo $i; ?>]" value="male" checked></label>
                                            <label class="btn btn-primary "> F<input type="radio" name="booking_traveller_gender[<?php echo $i; ?>]" value="female"></label>
                                                <label class="btn btn-primary "> O <input type="radio" name="booking_traveller_gender[<?php echo $i; ?>]" value="other"></label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone no.</label>
                                        <input class="form-control" type="text" name="booking_traveller_phone_no[]">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control" type="text" name="booking_traveller_address[]">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <hr>
                    @endfor
                <div>
                    <p>Booking Done By:</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" type="text" name="booking_booking_done_by">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Phone no.</label>
                                <input class="form-control" type="text" name="booking_phone_no">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email </label>
                                <input class="form-control" type="text" name="booking_email">
                            </div>
                        </div>
                    </div>


                </div>
                    <hr>



            </div>

            <div class="col-md-4">
                <div class="booking-item-payment">
                    <header class="clearfix">
                        <div class="booking-item-payment-img">
                            @if (Storage::disk('public')->has($hotel->hotel_logo))
                                <img src="{{Storage::URL($hotel->hotel_logo)}}" class="" width="300px" height="100px"/>
                            @endif
                        </div>
                        <h5 class="booking-item-payment-title"><a href="#">{{ $hotel->hotel_name }}</a></h5>
                        <ul class="icon-group booking-item-rating-stars">

                            @for($i=1;$i<=$hotel->hotel_star_rating;$i++)
                                <li><i class="fa fa-star"></i>
                                </li>
                            @endfor
                        </ul>
                    </header>
                    <ul class="booking-item-payment-details">
                        <li>
                            <h5>Booking details:</h5>
                            <div class="booking-item-payment-date">
                                <p class="booking-item-payment-date-day">
                                    {{ $data['start'] }}
                                </p>
                            </div>
                            <i class="fa fa-arrow-right booking-item-payment-date-separator"></i>
                            <div class="booking-item-payment-date">
                                <p class="booking-item-payment-date-day">{{ $data['end'] }}</p>
                            </div>
                        </li>
                        <li>
                            <h5>Room</h5>
                            <p class="booking-item-payment-item-title">{{ $room['name'] }}</p>
                            <ul class="booking-item-payment-price">
                                <li>
                                    <p class="booking-item-payment-price-title">Cost</p>
                                    <p class="booking-item-payment-price-amount">{{ $room['room_cost'] }}
                                        <small>/per day</small>
                                    </p>
                                </li>
                                <li>
                                    <p class="booking-item-payment-price-title">Cost Per Extra Bed</p>
                                    <p class="booking-item-payment-price-amount">{{ $room['cost_per_extra_bed'] }}
                                        <small>/per day</small>
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <p class="booking-item-payment-total">Total Cost: <span>$1,155</span>
                    <div class="pull-right"><button type="submit" class="btn btn-primary">Book Now</button></div>
                    </p>
                </div>
            </div>
        </form>
    </div>
    <div class="gap"></div>
    </div>

@endsection