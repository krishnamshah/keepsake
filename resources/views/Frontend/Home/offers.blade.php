@foreach($offers  as $offer)
    <div class="col-md-4">
        <h3>{{$offer->offername}}
            <small><a href="#">view all</a></small>
        </h3>
        {!!$offer->description!!}
        <ul class="booking-list">
            @forelse($offer->hotels->take(3) as $hotel)
                <li>


                    <div class="booking-item booking-item-small">
                        <div class="row">
                            <div class="col-xs-4">
                                <img src="url({{Storage::url($hotel->image) }})"
                                     alt="{{$hotel->name}}"
                                     title="{{$hotel->name}}">
                            </div>
                            <div class="col-xs-5">
                                <h5 class="booking-item-title">{{$hotel->name}}</h5>
                                <ul class="icon-group booking-item-rating-stars">
                                    @php $star=$hotel->hotel_star_rating;
                                    @endphp
                                    @for($i=1;$i<=$star;$i++)
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    @endfor
                                </ul>
                            </div>@php $collection=collect($hotel->rooms);

                            $sorted=$collection->sortBy('room_rate');

                            $price=$collection->take(1);

                            @endphp
                            <div class="col-xs-3"><span class="booking-item-price-from">from</span><span
                                        class="booking-item-price">@foreach($price as $pr)
                                        {{$pr->room_rate}}
                                    @endforeach</span>
                            </div>
                        </div>
                    </div>
                </li>
            @empty
                Offered Hotels will be listed soon
            @endforelse
        </ul>
    </div>

@endforeach