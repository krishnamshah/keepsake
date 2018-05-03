@extends('Frontend.layouts.app1')

@section('content')
    <div class="gap"></div>


    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Customer</h3>
                <p>Sign in to your <a href="#">Traveler account</a> for fast booking.</p>
                <div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="input-daterange" data-date-format="MM d, D">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-icon-left"><i
                                                    class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                            <label>Date Of Birth</label>
                                            <input class="form-control" name="start" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Gender</label>
                                <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                    <label class="btn btn-primary active">
                                        <input type="radio" name="male">M</label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="female">F</label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="other">Other</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Phone no.</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                </div>
                </form>
                <hr>

            </div>

            <div class="col-md-4">
                <div class="booking-item-payment">
                    <header class="clearfix">
                        <a class="booking-item-payment-img" href="#">
                            <img src="#" alt="Room Image" title="hotel 1">
                        </a>
                        <h5 class="booking-item-payment-title"><a href="#">Hotel_name</a></h5>
                        <ul class="icon-group booking-item-rating-stars">

                            {{--@for($i=1;$i<=$sea['hotel_star_rating'];$i++)--}}
                                {{--<li><i class="fa fa-star"></i>--}}
                                {{--</li>--}}
                            {{--@endfor--}}
                        </ul>
                    </header>
                    <ul class="booking-item-payment-details">
                        <li>
                            <h5>Booking details:</h5>
                            <div class="booking-item-payment-date">
                                <p class="booking-item-payment-date-day">Start date</p>
                            </div>
                            <i class="fa fa-arrow-right booking-item-payment-date-separator"></i>
                            <div class="booking-item-payment-date">
                                <p class="booking-item-payment-date-day">End Date</p>
                            </div>
                        </li>
                        <li>
                            <h5>Room</h5>
                            <p class="booking-item-payment-item-title">Club LVL Water View Dbl/Dbl Premier Room</p>
                            <ul class="booking-item-payment-price">
                                <li>
                                    <p class="booking-item-payment-price-title">7 Nights</p>
                                    <p class="booking-item-payment-price-amount">$150
                                        <small>/per day</small>
                                    </p>
                                </li>
                                <li>
                                    <p class="booking-item-payment-price-title">Taxes</p>
                                    <p class="booking-item-payment-price-amount">$15
                                        <small>/per day</small>
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <p class="booking-item-payment-total">Total trip: <span>$1,155</span>
                        <div class="pull-right"><a href="#"><span class="btn btn-primary">Book Now</span></a></div>
                    </p>
                </div>
            </div>
        </div>
        <div class="gap"></div>
    </div>

@endsection