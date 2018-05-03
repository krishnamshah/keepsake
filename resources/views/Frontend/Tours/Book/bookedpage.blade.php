@extends('Frontend.layouts.app1')

@section('content')
    <div class="gap"></div>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <i class="fa fa-check round box-icon-large box-icon-center box-icon-success mb30"></i>

                <h2 class="text-center">{{$datas['booked_by']->booked_by}}, your booking was successful!</h2>

                <h5 class="text-center ">To email to {{$datas['booked_by']->email}} ::: <a class="btn btn-primary" href="{{route('tour.sendemail',[$datas['booked_by']->email])}}"> Click Here!!</a></h5>
                <h5 class="text-center mb30"><?php
                    $ldate = date('Y-m-d H:i:s');
                    echo $ldate;
                    ?></h5>
                <ul class="order-payment-list list mb30">
                    <li>
                        <div class="row">
                            <div class="col-xs-9">
                                <h4><i class="fa fa-building"></i>{{$datas['tour']->name}} </h4>
                                <h6 class="mb10"><i class="fa fa-inbox"></i> {{$datas['tour']->description}}</h6>
                                <h6 class="mb10"><i class="fa fa-calendar">  {{$datas['search']->start}} to {{$datas['search']->end}}</i>
                                </h6>

                            </div>
                            <div class="col-xs-3">
                                <p class="text-right"><span class="text-lg"> Total </span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-9">
                                <h5><i class="fa fa-angle-right"></i> Travellers:</h5>

                                @forelse($datas['guest'] as $sea)

                                    <h6><i class="fa fa-accessible-icon"></i> {{$sea->name}}</h6>
                                    <p>
                                        <small>{{$sea->dob}}, {{$sea->gender}}, {{$sea->phone_no}}
                                            , {{$sea->address}} </small>
                                    </p>

                                @empty
                                    Sorry no result found!!
                                @endforelse
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-9">
                                <h5><i class="fa fa-angle-right"></i> Booked by:</h5>
                                <h6><i class="fa fa-accessible-icon"></i> {{$datas['booked_by']->booked_by}}</h6>
                                <p>
                                    <small>{{$datas['booked_by']->phone_no}}
                                    </small>
                                    <small>{{$datas['booked_by']->email}}
                                    </small>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
                <h4 class="text-center">You might also need</h4>
                <ul class="list list-inline list-center">
                    {{--<li><a class="btn btn-primary" href="#"><i class="fa fa-building-o"></i> Hotels</a>--}}
                    {{--<p class="text-center lh1em mt5"><small>362 offers<br> from $75</small>--}}
                    {{--</p>--}}
                    {{--</li>--}}
                    <li><a class="btn btn-primary" href="#"><i class="fa fa-plane"></i> Flight </a></li>
                    <li><a class="btn btn-primary" href="#"><i class="fa fa-car"></i> Cars</a></li>
                    <li><a class="btn btn-primary" href="#"><i class="fa fa-bolt"></i> Hotels</a></li>
                </ul>
            </div>
        </div>
        <div class="gap"></div>
    </div>







@endsection