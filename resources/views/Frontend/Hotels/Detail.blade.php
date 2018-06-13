@extends('Frontend.layouts.app1')

@section('content')


    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a>
            </li>
            <li>
            </li>
        </ul>
        <div class="booking-item-details">
            <header class="booking-item-header">
                <div class="row">
                    <div class="col-md-9">
                        <h2 class="lh1em">{{$hotel->hotel_name}}</h2>
                        <p class="lh1em text-small"><i class="fa fa-map-marker"></i> {{$hotel->street}},{{$hotel->city}}
                        </p>
                        <ul class="list list-inline text-small">
                            <li><a href="#"><i class="fa fa-envelope"></i> {{$hotel->email}}</a>
                            </li>
                            <li><a href="#"><i class="fa fa-home"></i> {{$hotel->website}}</a>
                            </li>
                            <li><i class="fa fa-phone"></i> {{$hotel->contact}}</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <p class="booking-item-header-price">
                            <small>price from</small>
                            <span class="text-lg">$350</span>/night
                        </p>
                    </div>
                </div>
            </header>
            <div class="row">
                <div class="col-md-8">
                    <div class="tabbable booking-details-tabbable">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-camera"></i>Photos</a>
                            </li>
                            <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-info-circle"></i>About</a>
                            </li>
                            <li><a href="#google-map-tab" data-toggle="tab"><i class="fa fa-map-marker"></i>On the
                                    Map</a>
                            </li>
                            <li><a href="#tab-5" data-toggle="tab"><i class="fa fa-asterisk"></i>Facilities</a>
                            </li>
                            <li><a href="#tab-7" data-toggle="tab"><i class="fa fa-comments"></i>Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-1">
                                <!-- START LIGHTBOX GALLERY -->

                                <div class="row row-no-gutter" id="popup-gallery">
                                    @forelse($hotelGallery as $image)
                                        <div class="col-md-2">
                                            <a class="hover-img popup-gallery-image"
                                               href="{{Storage::url($image->image)}}" data-effect="mfp-zoom-out">
                                                <img src="{{Storage::url($image->image)}}" alt="Image Alternative text"
                                                     title="hotel EDEN MAR suite"><i
                                                        class="fa fa-plus round box-icon-small hover-icon i round"></i>
                                            </a>
                                        </div>
                                    @empty
                                        Sorry No Image is avilable right now
                                    @endforelse
                                </div>

                                <!-- END LIGHTBOX GALLERY -->
                            </div>
                            <div class="tab-pane fade" id="tab-2">
                                <div class="mt20">
                                    <p>{{$hotel->description}}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="google-map-tab">
                                <div id="map-canvas" style="width:100%; height:400px;"></div>
                            </div>
                            <div class="tab-pane fade" id="tab-5">
                                <div class="row mt20">
                                    <div class="col-md-4">
                                        <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
                                            <li><i class="im im-wi-fi"></i><span class="booking-item-feature-title">Wi-Fi Internet</span>
                                            </li>
                                            <li><i class="im im-parking"></i><span class="booking-item-feature-title">Parking</span>
                                            </li>
                                            <li><i class="im im-plane"></i><span class="booking-item-feature-title">Airport Transport</span>
                                            </li>
                                            <li><i class="im im-bus"></i><span class="booking-item-feature-title">Shuttle Bus Service</span>
                                            </li>
                                            <li><i class="im im-fitness"></i><span class="booking-item-feature-title">Fitness Center</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
                                            <li><i class="im im-pool"></i><span
                                                        class="booking-item-feature-title">Pool</span>
                                            </li>
                                            <li><i class="im im-spa"></i><span
                                                        class="booking-item-feature-title">SPA</span>
                                            </li>
                                            <li><i class="im im-restaurant"></i><span
                                                        class="booking-item-feature-title">Restaurant</span>
                                            </li>
                                            <li><i class="im im-wheel-chair"></i><span
                                                        class="booking-item-feature-title">Wheelchair Access</span>
                                            </li>
                                            <li><i class="im im-business-person"></i><span
                                                        class="booking-item-feature-title">Business Center</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
                                            <li><i class="im im-children"></i><span class="booking-item-feature-title">Children Activites</span>
                                            </li>
                                            <li><i class="im im-casino"></i><span class="booking-item-feature-title">Casino & Gambling</span>
                                            </li>
                                            <li><i class="im im-bar"></i><span class="booking-item-feature-title">Bar/Lounge</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            {{--<div class="tab-pane fade" id="tab-7">--}}
                                {{--<div class="mt20">--}}
                                    {{--<div class="text-right mb10"><a class="btn btn-primary" href="#">Write a review</a>--}}
                                    {{--</div>--}}
                                    {{--<ul class="booking-item-reviews list">--}}
                                        {{--<li>--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-2">--}}
                                                    {{--<div class="booking-item-review-person">--}}
                                                        {{--<a class="booking-item-review-person-avatar round" href="#">--}}
                                                            {{--<img src="img\me_with_the_uke_70x70.jpg"--}}
                                                                 {{--alt="Image Alternative text" title="Me with the Uke">--}}
                                                        {{--</a>--}}
                                                        {{--<p class="booking-item-review-person-name"><a href="#">John--}}
                                                                {{--Doe</a>--}}
                                                        {{--</p>--}}
                                                        {{--<p class="booking-item-review-person-loc">Palm Beach, FL</p>--}}
                                                        {{--<small><a href="#">106 Reviews</a></small>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-10">--}}
                                                    {{--<div class="booking-item-review-content">--}}
                                                        {{--<h5>"Ultricies bibendum augue dapibus nostra diam"</h5>--}}
                                                        {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                        {{--</ul>--}}
                                                        {{--<p>Amet tincidunt commodo ullamcorper lorem maecenas nibh--}}
                                                            {{--cubilia gravida mus senectus donec consectetur dis ac vel--}}
                                                            {{--quis a suscipit potenti purus aptent nibh gravida aliquet--}}
                                                            {{--vestibulum varius dictum consectetur semper consectetur at--}}
                                                            {{--varius<span class="booking-item-review-more"> Donec sociis habitasse vivamus eget faucibus tempus donec lorem etiam volutpat blandit aliquam varius molestie nibh mattis adipiscing sodales dictumst volutpat quam rhoncus sodales auctor sit parturient aenean sodales maecenas fusce potenti tristique</span>--}}
                                                        {{--</p>--}}
                                                        {{--<div class="booking-item-review-more-content">--}}
                                                            {{--<p>Lectus dapibus hendrerit habitant tristique vulputate--}}
                                                                {{--vehicula quisque nisl curabitur varius enim quam--}}
                                                                {{--maecenas facilisis</p>--}}
                                                            {{--<p>Inceptos auctor gravida massa facilisis risus nascetur--}}
                                                                {{--metus morbi nibh magnis semper elit proin vivamus hac--}}
                                                                {{--vivamus ultricies hac nulla sodales himenaeos luctus--}}
                                                                {{--nascetur lacus sed placerat penatibus sociosqu lectus--}}
                                                                {{--semper tincidunt pellentesque volutpat egestas porttitor--}}
                                                                {{--vivamus placerat pulvinar augue integer eleifend--}}
                                                                {{--praesent luctus adipiscing</p>--}}
                                                            {{--<p class="text-small mt20">Stayed March 2014, traveled as a--}}
                                                                {{--couple</p>--}}
                                                            {{--<div class="row">--}}
                                                                {{--<div class="col-md-4">--}}
                                                                    {{--<ul class="list booking-item-raiting-summary-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Sleep--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Location--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li>--}}
                                                                                    {{--<i class="fa fa-smile-o text-gray"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Service--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="col-md-4">--}}
                                                                    {{--<ul class="list booking-item-raiting-summary-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Clearness--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li>--}}
                                                                                    {{--<i class="fa fa-smile-o text-gray"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Rooms--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li>--}}
                                                                                    {{--<i class="fa fa-smile-o text-gray"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="booking-item-review-expand"><span--}}
                                                                    {{--class="booking-item-review-expand-more">More <i--}}
                                                                        {{--class="fa fa-angle-down"></i></span><span--}}
                                                                    {{--class="booking-item-review-expand-less">Less <i--}}
                                                                        {{--class="fa fa-angle-up"></i></span>--}}
                                                        {{--</div>--}}
                                                        {{--<p class="booking-item-review-rate">Was this review helpful?--}}
                                                            {{--<a class="fa fa-thumbs-o-up box-icon-inline round"--}}
                                                               {{--href="#"></a><b class="text-color"> 6</b>--}}
                                                        {{--</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-2">--}}
                                                    {{--<div class="booking-item-review-person">--}}
                                                        {{--<a class="booking-item-review-person-avatar round" href="#">--}}
                                                            {{--<img src="img\gamer_chick_70x70.jpg"--}}
                                                                 {{--alt="Image Alternative text" title="Gamer Chick">--}}
                                                        {{--</a>--}}
                                                        {{--<p class="booking-item-review-person-name"><a href="#">Minnie--}}
                                                                {{--Aviles</a>--}}
                                                        {{--</p>--}}
                                                        {{--<p class="booking-item-review-person-loc">Palm Beach, FL</p>--}}
                                                        {{--<small><a href="#">100 Reviews</a></small>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-10">--}}
                                                    {{--<div class="booking-item-review-content">--}}
                                                        {{--<h5>"Suspendisse a tempus"</h5>--}}
                                                        {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                        {{--</ul>--}}
                                                        {{--<p>Lacinia etiam ultricies quam potenti potenti gravida aptent--}}
                                                            {{--lorem tempus nibh est scelerisque a metus habitant facilisi--}}
                                                            {{--sagittis lorem ridiculus aliquet<span--}}
                                                                    {{--class="booking-item-review-more"> Litora euismod massa odio quam felis ad diam suspendisse in etiam enim mattis taciti quis velit urna neque lacinia torquent sociis tempus pulvinar cubilia laoreet nisl phasellus fames ligula condimentum potenti lobortis consequat dui sem elementum cras euismod lacus porttitor proin cursus mus leo nulla dictum orci nec aenean dignissim penatibus phasellus penatibus mollis class suscipit purus arcu torquent placerat ac condimentum molestie etiam</span>--}}
                                                        {{--</p>--}}
                                                        {{--<div class="booking-item-review-more-content">--}}
                                                            {{--<p>Ornare mauris volutpat duis integer nunc praesent nisl--}}
                                                                {{--maecenas fames porttitor adipiscing nisl tellus inceptos--}}
                                                                {{--natoque vulputate dictum risus sollicitudin hendrerit--}}
                                                                {{--natoque felis varius ut torquent vivamus leo lacinia--}}
                                                                {{--maecenas eget litora aptent dignissim aliquet natoque--}}
                                                                {{--montes habitasse tempus tempor condimentum senectus--}}
                                                                {{--pretium vestibulum</p>--}}
                                                            {{--<p>Litora ut aenean varius sociosqu montes ridiculus in--}}
                                                                {{--varius viverra justo interdum vulputate commodo ut neque--}}
                                                                {{--pretium eleifend scelerisque ad fusce elementum--}}
                                                                {{--vestibulum facilisis mus libero ultrices mi nisl--}}
                                                                {{--praesent nulla facilisi dis id molestie placerat mus--}}
                                                                {{--etiam odio fames in rhoncus in elit urna phasellus--}}
                                                                {{--ridiculus class torquent hendrerit elementum vel--}}
                                                                {{--magna</p>--}}
                                                            {{--<p class="text-small mt20">Stayed March 2014, traveled as a--}}
                                                                {{--couple</p>--}}
                                                            {{--<div class="row">--}}
                                                                {{--<div class="col-md-4">--}}
                                                                    {{--<ul class="list booking-item-raiting-summary-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Sleep--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Location--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Service--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="col-md-4">--}}
                                                                    {{--<ul class="list booking-item-raiting-summary-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Clearness--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li>--}}
                                                                                    {{--<i class="fa fa-smile-o text-gray"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Rooms--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li>--}}
                                                                                    {{--<i class="fa fa-smile-o text-gray"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="booking-item-review-expand"><span--}}
                                                                    {{--class="booking-item-review-expand-more">More <i--}}
                                                                        {{--class="fa fa-angle-down"></i></span><span--}}
                                                                    {{--class="booking-item-review-expand-less">Less <i--}}
                                                                        {{--class="fa fa-angle-up"></i></span>--}}
                                                        {{--</div>--}}
                                                        {{--<p class="booking-item-review-rate">Was this review helpful?--}}
                                                            {{--<a class="fa fa-thumbs-o-up box-icon-inline round"--}}
                                                               {{--href="#"></a><b class="text-color"> 14</b>--}}
                                                        {{--</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-2">--}}
                                                    {{--<div class="booking-item-review-person">--}}
                                                        {{--<a class="booking-item-review-person-avatar round" href="#">--}}
                                                            {{--<img src="img\amaze_70x70.jpg" alt="Image Alternative text"--}}
                                                                 {{--title="AMaze">--}}
                                                        {{--</a>--}}
                                                        {{--<p class="booking-item-review-person-name"><a href="#">Cyndy--}}
                                                                {{--Naquin</a>--}}
                                                        {{--</p>--}}
                                                        {{--<p class="booking-item-review-person-loc">Palm Beach, FL</p>--}}
                                                        {{--<small><a href="#">64 Reviews</a></small>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-10">--}}
                                                    {{--<div class="booking-item-review-content">--}}
                                                        {{--<h5>"Penatibus ridiculus interdum leo ultricies sociis"</h5>--}}
                                                        {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                        {{--</ul>--}}
                                                        {{--<p>Mus vivamus viverra in volutpat sed dis ultrices sem cum in--}}
                                                            {{--id nisi praesent ultricies elit ligula purus odio maecenas--}}
                                                            {{--vivamus ut taciti nam erat metus litora<span--}}
                                                                    {{--class="booking-item-review-more"> Libero tincidunt dui ridiculus nulla velit eget nunc aliquet at euismod imperdiet diam fames nostra tempus vulputate est ultrices ligula vestibulum ante lacus vestibulum at elementum suspendisse purus quis varius lacinia odio ac pulvinar sollicitudin volutpat eu proin habitasse ornare nam mattis ornare vel fames diam velit pulvinar maecenas faucibus a</span>--}}
                                                        {{--</p>--}}
                                                        {{--<div class="booking-item-review-more-content">--}}
                                                            {{--<p>Himenaeos natoque accumsan volutpat pharetra mi tempor--}}
                                                                {{--parturient a sit a donec dignissim laoreet vestibulum--}}
                                                                {{--hendrerit netus senectus tincidunt habitant aliquet--}}
                                                                {{--velit fusce tempus torquent felis justo diam vivamus--}}
                                                                {{--suscipit pretium vel parturient amet habitant lacus--}}
                                                                {{--quis</p>--}}
                                                            {{--<p>Suspendisse tincidunt feugiat nullam ridiculus lacus--}}
                                                                {{--suspendisse consectetur pulvinar nec quis nam eleifend--}}
                                                                {{--interdum egestas sem eleifend molestie volutpat donec--}}
                                                                {{--dis aliquet est nibh class mauris risus faucibus--}}
                                                                {{--inceptos at pulvinar donec auctor et tellus nunc netus--}}
                                                                {{--elementum in ipsum ultrices mus adipiscing turpis metus--}}
                                                                {{--faucibus vitae vel id congue vitae tortor vel aliquam--}}
                                                                {{--eleifend nec donec</p>--}}
                                                            {{--<p class="text-small mt20">Stayed March 2014, traveled as a--}}
                                                                {{--couple</p>--}}
                                                            {{--<div class="row">--}}
                                                                {{--<div class="col-md-4">--}}
                                                                    {{--<ul class="list booking-item-raiting-summary-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Sleep--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li>--}}
                                                                                    {{--<i class="fa fa-smile-o text-gray"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Location--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Service--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="col-md-4">--}}
                                                                    {{--<ul class="list booking-item-raiting-summary-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Clearness--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Rooms--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="booking-item-review-expand"><span--}}
                                                                    {{--class="booking-item-review-expand-more">More <i--}}
                                                                        {{--class="fa fa-angle-down"></i></span><span--}}
                                                                    {{--class="booking-item-review-expand-less">Less <i--}}
                                                                        {{--class="fa fa-angle-up"></i></span>--}}
                                                        {{--</div>--}}
                                                        {{--<p class="booking-item-review-rate">Was this review helpful?--}}
                                                            {{--<a class="fa fa-thumbs-o-up box-icon-inline round"--}}
                                                               {{--href="#"></a><b class="text-color"> 12</b>--}}
                                                        {{--</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-2">--}}
                                                    {{--<div class="booking-item-review-person">--}}
                                                        {{--<a class="booking-item-review-person-avatar round" href="#">--}}
                                                            {{--<img src="img\bubbles_70x70.jpg"--}}
                                                                 {{--alt="Image Alternative text" title="Bubbles">--}}
                                                        {{--</a>--}}
                                                        {{--<p class="booking-item-review-person-name"><a href="#">Carol--}}
                                                                {{--Blevins</a>--}}
                                                        {{--</p>--}}
                                                        {{--<p class="booking-item-review-person-loc">Palm Beach, FL</p>--}}
                                                        {{--<small><a href="#">71 Reviews</a></small>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-10">--}}
                                                    {{--<div class="booking-item-review-content">--}}
                                                        {{--<h5>"Placerat luctus habitant nulla curabitur ultricies"</h5>--}}
                                                        {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                        {{--</ul>--}}
                                                        {{--<p>Aliquet curae aliquam facilisi ac eu justo scelerisque--}}
                                                            {{--blandit vitae turpis curae nunc placerat netus nisi lorem--}}
                                                            {{--integer aptent sociis venenatis neque integer<span--}}
                                                                    {{--class="booking-item-review-more"> Augue varius dolor eget aptent quis pretium nostra volutpat elit consectetur dapibus netus quisque suscipit vivamus augue cras tortor odio diam pretium pretium elementum commodo hendrerit facilisis id nascetur integer class cum sapien phasellus</span>--}}
                                                        {{--</p>--}}
                                                        {{--<div class="booking-item-review-more-content">--}}
                                                            {{--<p>At cubilia mattis mollis porta ligula ultricies sit vel--}}
                                                                {{--phasellus quisque tincidunt facilisis ullamcorper--}}
                                                                {{--eleifend nam porttitor purus at dis</p>--}}
                                                            {{--<p>Odio est lorem odio auctor augue diam duis lorem est--}}
                                                                {{--imperdiet sagittis sem laoreet sociosqu porta morbi per--}}
                                                                {{--proin rutrum penatibus nascetur sed in nostra duis eros--}}
                                                                {{--hendrerit id egestas sit amet lacinia per praesent etiam--}}
                                                                {{--praesent curabitur pellentesque</p>--}}
                                                            {{--<p class="text-small mt20">Stayed March 2014, traveled as a--}}
                                                                {{--couple</p>--}}
                                                            {{--<div class="row">--}}
                                                                {{--<div class="col-md-4">--}}
                                                                    {{--<ul class="list booking-item-raiting-summary-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Sleep--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li>--}}
                                                                                    {{--<i class="fa fa-smile-o text-gray"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Location--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Service--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="col-md-4">--}}
                                                                    {{--<ul class="list booking-item-raiting-summary-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Clearness--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Rooms--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="booking-item-review-expand"><span--}}
                                                                    {{--class="booking-item-review-expand-more">More <i--}}
                                                                        {{--class="fa fa-angle-down"></i></span><span--}}
                                                                    {{--class="booking-item-review-expand-less">Less <i--}}
                                                                        {{--class="fa fa-angle-up"></i></span>--}}
                                                        {{--</div>--}}
                                                        {{--<p class="booking-item-review-rate">Was this review helpful?--}}
                                                            {{--<a class="fa fa-thumbs-o-up box-icon-inline round"--}}
                                                               {{--href="#"></a><b class="text-color"> 6</b>--}}
                                                        {{--</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-2">--}}
                                                    {{--<div class="booking-item-review-person">--}}
                                                        {{--<a class="booking-item-review-person-avatar round" href="#">--}}
                                                            {{--<img src="img\good_job_70x70.jpg"--}}
                                                                 {{--alt="Image Alternative text" title="Good job">--}}
                                                        {{--</a>--}}
                                                        {{--<p class="booking-item-review-person-name"><a href="#">Cheryl--}}
                                                                {{--Gustin</a>--}}
                                                        {{--</p>--}}
                                                        {{--<p class="booking-item-review-person-loc">Palm Beach, FL</p>--}}
                                                        {{--<small><a href="#">45 Reviews</a></small>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-10">--}}
                                                    {{--<div class="booking-item-review-content">--}}
                                                        {{--<h5>"Interdum primis quisque suscipit"</h5>--}}
                                                        {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                        {{--</ul>--}}
                                                        {{--<p>Etiam lacinia condimentum aliquet eleifend et eros lacinia--}}
                                                            {{--consectetur elit sit pretium est sem tristique dapibus--}}
                                                            {{--mollis ut augue lobortis est blandit leo sodales facilisi--}}
                                                            {{--elementum nisi ad vitae suspendisse odio dolor cubilia--}}
                                                            {{--ullamcorper cubilia consectetur<span--}}
                                                                    {{--class="booking-item-review-more"> Cubilia tempor egestas viverra senectus posuere litora metus metus tempus venenatis vehicula blandit hendrerit fames viverra taciti nullam nibh sodales platea orci lacinia enim ullamcorper tellus tempus justo iaculis eu nam at lacinia habitant nam justo tristique amet lorem dignissim cum sit in nisl accumsan per turpis himenaeos sociis aliquet consequat praesent ligula ullamcorper nulla habitasse eget quam malesuada mattis</span>--}}
                                                        {{--</p>--}}
                                                        {{--<div class="booking-item-review-more-content">--}}
                                                            {{--<p>Volutpat metus habitasse tortor blandit porttitor etiam--}}
                                                                {{--proin hac enim suspendisse pulvinar curabitur orci dolor--}}
                                                                {{--cras faucibus sollicitudin torquent odio dictum--}}
                                                                {{--feugiat</p>--}}
                                                            {{--<p>Adipiscing lobortis nisl arcu dignissim fusce ultrices--}}
                                                                {{--massa magnis luctus vivamus orci metus nisi consequat--}}
                                                                {{--ultricies hendrerit ultrices dignissim fusce nulla curae--}}
                                                                {{--mi fusce id mollis viverra tristique elit risus--}}
                                                                {{--tristique magna facilisis blandit consequat bibendum--}}
                                                                {{--cubilia dis viverra cras taciti fermentum fusce nunc--}}
                                                                {{--arcu diam mi aenean sit vivamus inceptos facilisi quis--}}
                                                                {{--ligula eu</p>--}}
                                                            {{--<p class="text-small mt20">Stayed March 2014, traveled as a--}}
                                                                {{--couple</p>--}}
                                                            {{--<div class="row">--}}
                                                                {{--<div class="col-md-4">--}}
                                                                    {{--<ul class="list booking-item-raiting-summary-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Sleep--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Location--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Service--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="col-md-4">--}}
                                                                    {{--<ul class="list booking-item-raiting-summary-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Clearness--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li>--}}
                                                                                    {{--<i class="fa fa-smile-o text-gray"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Rooms--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="booking-item-review-expand"><span--}}
                                                                    {{--class="booking-item-review-expand-more">More <i--}}
                                                                        {{--class="fa fa-angle-down"></i></span><span--}}
                                                                    {{--class="booking-item-review-expand-less">Less <i--}}
                                                                        {{--class="fa fa-angle-up"></i></span>--}}
                                                        {{--</div>--}}
                                                        {{--<p class="booking-item-review-rate">Was this review helpful?--}}
                                                            {{--<a class="fa fa-thumbs-o-up box-icon-inline round"--}}
                                                               {{--href="#"></a><b class="text-color"> 11</b>--}}
                                                        {{--</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-2">--}}
                                                    {{--<div class="booking-item-review-person">--}}
                                                        {{--<a class="booking-item-review-person-avatar round" href="#">--}}
                                                            {{--<img src="img\afro_70x70.jpg" alt="Image Alternative text"--}}
                                                                 {{--title="Afro">--}}
                                                        {{--</a>--}}
                                                        {{--<p class="booking-item-review-person-name"><a href="#">Joe--}}
                                                                {{--Smith</a>--}}
                                                        {{--</p>--}}
                                                        {{--<p class="booking-item-review-person-loc">Palm Beach, FL</p>--}}
                                                        {{--<small><a href="#">140 Reviews</a></small>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-10">--}}
                                                    {{--<div class="booking-item-review-content">--}}
                                                        {{--<h5>"Turpis varius senectus"</h5>--}}
                                                        {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                        {{--</ul>--}}
                                                        {{--<p>Aliquet sit vitae sagittis a mi vel netus accumsan vivamus--}}
                                                            {{--litora urna lacinia ornare non aliquet augue magnis vivamus--}}
                                                            {{--nullam faucibus a per ultrices vivamus convallis est nullam--}}
                                                            {{--ipsum habitasse tempor vitae litora nunc augue phasellus--}}
                                                            {{--lobortis lectus<span class="booking-item-review-more"> Vivamus venenatis eu quam cursus mollis elementum aenean primis nunc dignissim elementum et vel lorem suscipit tempus primis urna sodales curabitur pharetra ullamcorper per dictum ac eros faucibus nam leo felis eget id dui ultricies inceptos eleifend adipiscing lacus eu egestas commodo</span>--}}
                                                        {{--</p>--}}
                                                        {{--<div class="booking-item-review-more-content">--}}
                                                            {{--<p>Pharetra suscipit varius curae ac nec lobortis ipsum eros--}}
                                                                {{--lacinia ipsum nibh sapien taciti taciti turpis laoreet--}}
                                                                {{--taciti ipsum blandit mollis torquent curabitur fusce--}}
                                                                {{--vehicula ultrices placerat id vulputate ipsum class--}}
                                                                {{--lectus mollis gravida vivamus</p>--}}
                                                            {{--<p>Eleifend ullamcorper dictum laoreet vivamus vestibulum--}}
                                                                {{--tincidunt ante in amet ut ultrices platea viverra--}}
                                                                {{--facilisi orci nisi cras lacus fames fusce fusce--}}
                                                                {{--fermentum massa nostra ut lacinia fusce pellentesque--}}
                                                                {{--risus potenti inceptos dictumst dolor parturient--}}
                                                                {{--ridiculus ipsum ante egestas arcu arcu pharetra tempus--}}
                                                                {{--habitasse habitant turpis nisi elit volutpat congue--}}
                                                                {{--sodales sociis donec condimentum nibh posuere--}}
                                                                {{--pretium</p>--}}
                                                            {{--<p class="text-small mt20">Stayed March 2014, traveled as a--}}
                                                                {{--couple</p>--}}
                                                            {{--<div class="row">--}}
                                                                {{--<div class="col-md-4">--}}
                                                                    {{--<ul class="list booking-item-raiting-summary-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Sleep--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li>--}}
                                                                                    {{--<i class="fa fa-smile-o text-gray"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Location--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Service--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="col-md-4">--}}
                                                                    {{--<ul class="list booking-item-raiting-summary-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Clearness--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li>--}}
                                                                                    {{--<i class="fa fa-smile-o text-gray"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Rooms--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="booking-item-review-expand"><span--}}
                                                                    {{--class="booking-item-review-expand-more">More <i--}}
                                                                        {{--class="fa fa-angle-down"></i></span><span--}}
                                                                    {{--class="booking-item-review-expand-less">Less <i--}}
                                                                        {{--class="fa fa-angle-up"></i></span>--}}
                                                        {{--</div>--}}
                                                        {{--<p class="booking-item-review-rate">Was this review helpful?--}}
                                                            {{--<a class="fa fa-thumbs-o-up box-icon-inline round"--}}
                                                               {{--href="#"></a><b class="text-color"> 6</b>--}}
                                                        {{--</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-2">--}}
                                                    {{--<div class="booking-item-review-person">--}}
                                                        {{--<a class="booking-item-review-person-avatar round" href="#">--}}
                                                            {{--<img src="img\chiara_70x70.jpg" alt="Image Alternative text"--}}
                                                                 {{--title="Chiara">--}}
                                                        {{--</a>--}}
                                                        {{--<p class="booking-item-review-person-name"><a href="#">Ava--}}
                                                                {{--McDonald</a>--}}
                                                        {{--</p>--}}
                                                        {{--<p class="booking-item-review-person-loc">Palm Beach, FL</p>--}}
                                                        {{--<small><a href="#">54 Reviews</a></small>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-10">--}}
                                                    {{--<div class="booking-item-review-content">--}}
                                                        {{--<h5>"Enim fames venenatis quam imperdiet vel"</h5>--}}
                                                        {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                            {{--<li><i class="fa fa-star"></i>--}}
                                                            {{--</li>--}}
                                                        {{--</ul>--}}
                                                        {{--<p>Dignissim accumsan suspendisse ac maecenas pretium massa--}}
                                                            {{--lacus leo nisl pharetra porta cursus tempor dui risus--}}
                                                            {{--egestas erat libero cras proin velit enim pulvinar etiam--}}
                                                            {{--posuere varius arcu velit praesent iaculis auctor habitasse--}}
                                                            {{--potenti torquent<span class="booking-item-review-more"> Eget nec turpis fusce mauris donec aenean aptent in gravida eu tincidunt sociis neque in diam facilisis accumsan neque rhoncus quisque eget nascetur ac platea feugiat nam pulvinar arcu tortor facilisi facilisis fringilla aliquet vitae montes lorem gravida fermentum sed venenatis tristique nam ut quisque faucibus interdum et fusce penatibus bibendum penatibus pellentesque</span>--}}
                                                        {{--</p>--}}
                                                        {{--<div class="booking-item-review-more-content">--}}
                                                            {{--<p>Morbi facilisis leo dolor auctor etiam lorem ultricies--}}
                                                                {{--semper purus blandit fames tempor turpis conubia--}}
                                                                {{--faucibus</p>--}}
                                                            {{--<p>Suscipit magnis ut interdum sociis praesent hac nam ipsum--}}
                                                                {{--facilisis purus enim platea ligula urna lacus enim--}}
                                                                {{--turpis eros neque dignissim tempor netus per congue--}}
                                                                {{--auctor elit curae class praesent bibendum adipiscing--}}
                                                                {{--pulvinar mollis laoreet pretium cubilia purus curae--}}
                                                                {{--elementum torquent arcu nibh aliquet blandit porttitor--}}
                                                                {{--nec augue fermentum in ligula</p>--}}
                                                            {{--<p class="text-small mt20">Stayed March 2014, traveled as a--}}
                                                                {{--couple</p>--}}
                                                            {{--<div class="row">--}}
                                                                {{--<div class="col-md-4">--}}
                                                                    {{--<ul class="list booking-item-raiting-summary-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Sleep--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li>--}}
                                                                                    {{--<i class="fa fa-smile-o text-gray"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Location--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li>--}}
                                                                                    {{--<i class="fa fa-smile-o text-gray"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Service--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li>--}}
                                                                                    {{--<i class="fa fa-smile-o text-gray"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="col-md-4">--}}
                                                                    {{--<ul class="list booking-item-raiting-summary-list">--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Clearness--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<div class="booking-item-raiting-list-title">--}}
                                                                                {{--Rooms--}}
                                                                            {{--</div>--}}
                                                                            {{--<ul class="icon-group booking-item-rating-stars">--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li><i class="fa fa-smile-o"></i>--}}
                                                                                {{--</li>--}}
                                                                                {{--<li>--}}
                                                                                    {{--<i class="fa fa-smile-o text-gray"></i>--}}
                                                                                {{--</li>--}}
                                                                            {{--</ul>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="booking-item-review-expand"><span--}}
                                                                    {{--class="booking-item-review-expand-more">More <i--}}
                                                                        {{--class="fa fa-angle-down"></i></span><span--}}
                                                                    {{--class="booking-item-review-expand-less">Less <i--}}
                                                                        {{--class="fa fa-angle-up"></i></span>--}}
                                                        {{--</div>--}}
                                                        {{--<p class="booking-item-review-rate">Was this review helpful?--}}
                                                            {{--<a class="fa fa-thumbs-o-up box-icon-inline round"--}}
                                                               {{--href="#"></a><b class="text-color"> 13</b>--}}
                                                        {{--</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                    {{--<div class="row wrap">--}}
                                        {{--<div class="col-md-5">--}}
                                            {{--<p>--}}
                                                {{--<small>1176 reviews on this hotel. &nbsp;&nbsp;Showing 1 to 7</small>--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-7">--}}
                                            {{--<ul class="pagination">--}}
                                                {{--<li class="active"><a href="#">1</a>--}}
                                                {{--</li>--}}
                                                {{--<li><a href="#">2</a>--}}
                                                {{--</li>--}}
                                                {{--<li><a href="#">3</a>--}}
                                                {{--</li>--}}
                                                {{--<li><a href="#">4</a>--}}
                                                {{--</li>--}}
                                                {{--<li><a href="#">5</a>--}}
                                                {{--</li>--}}
                                                {{--<li><a href="#">6</a>--}}
                                                {{--</li>--}}
                                                {{--<li><a href="#">7</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="dots">...</li>--}}
                                                {{--<li><a href="#">43</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="next"><a href="#">Next Page</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="text-right mt10"><a class="btn btn-primary" href="#">Write a review</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="booking-item-meta">
                        <h2 class="lh1em mt40">Exeptional!</h2>
                        <h3>97%
                            <small>of guests recommend</small>
                        </h3>
                        <div class="booking-item-rating">
                            <ul class="icon-list icon-group booking-item-rating-stars">
                                @for($i=1;$i<=$hotel['hotel_star_rating'];$i++)
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                @endfor
                            </ul>
                            <span class="booking-item-rating-number"><b>{{$hotel->hotel_star_rating}}</b> of 7 <small
                                        class="text-smaller">guest rating</small></span>
                            <p><a class="text-default" href="#">based on 1535 reviews</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="gap gap-small"></div>
            <h3>Available Rooms</h3>
            <div class="row">
                <div class="col-md-12">
                    <ul class="booking-list">
                        @forelse($rooms as $room)

                            <li>
                                <a class="booking-item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="{{URL::to('storage/'.$room->image)}}"
                                                 alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO lobby">
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="booking-item-title">{{$room->name}}</h5>
                                            {{--<p class="text-small">Pellentesque mattis iaculis felis tempus tristique--}}
                                                {{--metus--}}
                                                {{--accumsan nullam volutpat elementum mattis tempor</p>--}}
                                            <ul class="booking-item-features booking-item-features-sign clearfix">
                                                <li rel="tooltip" data-placement="top" title="Adults Occupancy"><i
                                                            class="fa fa-male"></i><span
                                                            class="booking-item-feature-sign">x 2</span>
                                                </li>
                                                <li rel="tooltip" data-placement="top" title="Children Occupancy"><i
                                                            class="im im-children"></i><span
                                                            class="booking-item-feature-sign">x 2</span>
                                                </li>
                                                <li rel="tooltip" data-placement="top" title="Beds"><i
                                                            class="im im-bed"></i><span
                                                            class="booking-item-feature-sign">x 1</span>
                                                </li>
                                                <li rel="tooltip" data-placement="top"
                                                    title="Room footage (square feet)"><i
                                                            class="im im-width"></i><span
                                                            class="booking-item-feature-sign">460</span>
                                                </li>
                                            </ul>
                                            <ul class="booking-item-features booking-item-features-small clearfix">
                                                <li rel="tooltip" data-placement="top" title="Air Conditioning"><i
                                                            class="im im-air"></i>
                                                </li>
                                                <li rel="tooltip" data-placement="top" title="Bathtub"><i
                                                            class="im im-bathtub"></i>
                                                </li>
                                                <li rel="tooltip" data-placement="top" title="Soundproof"><i
                                                            class="im im-soundproof"></i>
                                                </li>
                                                <li rel="tooltip" data-placement="top" title="SPA tub"><i
                                                            class="im im-spa"></i>
                                                </li>
                                                <li rel="tooltip" data-placement="top" title="Pool"><i
                                                            class="im im-pool"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3"><span
                                                    class="booking-item-price">{{$room->room_cost}}</span><span>/night</span><span
                                                    class="btn btn-primary"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @empty
                        @endforelse
                    </ul>
                </div>


            </div>
        </div>
        <div class="gap gap-small"></div>
    </div>



@endsection
