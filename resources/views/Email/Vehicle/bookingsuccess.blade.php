@component('mail::message')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <i class="fa fa-check round box-icon-large box-icon-center box-icon-success mb30"></i>

                <h2 class="text-center">{{$datas['booked_by']->booked_by}}, your booking was successful!</h2>


                <h5 class="text-center mb30"><?php
                    $ldate = date('Y-m-d H:i:s');
                    echo $ldate;
                    ?></h5>
                <ul class="order-payment-list list mb30">
                    <li>
                        <div class="row">
                            <div class="col-xs-9">
                                <h4><i class="fa fa-building"></i>{{$datas['vehicle']->name}} </h4>
                                <h6 class="mb10"><i class="fa fa-inbox"></i> {{$datas['vehicle']->description}}</h6>
                                <h6 class="mb10"><i class="fa fa-inbox"></i> {{$datas['vehicle']->type}}</h6>
                                <br>
                                <h6 class="mb10"><i class="fa fa-inbox"></i> {{$datas['search']->from}}
                                    to {{$datas['search']->to}}</h6>
                                <h6 class="mb10"><i class="fa fa-calendar">  {{$datas['search']->start}}
                                        to {{$datas['search']->end}}</i></h6>
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

            </div>
        </div>
        <div class="gap"></div>
    </div>


@component('mail::button', ['url' => 'home'])
Download PDF
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
