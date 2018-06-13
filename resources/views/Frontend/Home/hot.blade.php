<div class="col-md-4">
    <h3>Hotels <small><a href="#">view all</a></small></h3>
    <ul class="booking-list">
        @forelse($hotel as $sea)
        <li>
            <div class="booking-item booking-item-small">
                <div class="row">
                    <div class="col-xs-4">
                        <img src="{{URL::to('storage/'.$sea->hotel_logo)}}" alt="{{$sea->name}}" title="AMaze">
                    </div>
                    <div class="col-xs-5">
                        <h5 class="booking-item-title"> {{$sea->hotel_name}}</h5>
                        <p class="mb0"> @for($i=1;$i<=$sea['hotel_star_rating'];$i++)
                                <i class="fa fa-star"></i>

                            @endfor
                        </p>
                    </div>
                </div>
            </div>
        </li>
        @empty
            Sorry no result found!!
        @endforelse
    </ul>
</div>