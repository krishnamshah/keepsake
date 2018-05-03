@extends('Frontend.layouts.app1')

@section('content')
        <div class="container">
            <h1 class="page-title">Search for Activities</h1>
        </div>




        <div class="container">
            <form>
                <div class="input-daterange" data-date-format="MM d, D">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                <label>Where</label>
                                <input class="typeahead form-control" placeholder="City or U.S. Zip Code" type="text">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                <label>Check in</label>
                                <input class="form-control" name="start" type="text">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                <label>Check out</label>
                                <input class="form-control" name="end" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <input class="btn btn-primary mt10" type="submit" value="Search for Activities">
            </form>
            <div class="gap gap-small"></div>
            <h3 class="mb20">Activities in Popuplar Destinations</h3>
            <div class="row row-wrap">
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img\gaviota_en_el_top_800x600.jpg" alt="Image Alternative text" title="Gaviota en el Top">
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>New York City Hotels</h5>
                                    <p>53650 reviews</p>
                                    <p class="mb0">804 offers from $54</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img\sydney_harbour_800x600.jpg" alt="Image Alternative text" title="Sydney Harbour">
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Sydney Hotels</h5>
                                    <p>62258 reviews</p>
                                    <p class="mb0">836 offers from $96</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img\street_800x600.jpg" alt="Image Alternative text" title="Street">
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Disney World Hotels</h5>
                                    <p>75702 reviews</p>
                                    <p class="mb0">879 offers from $95</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img\the_journey_home_400x300.jpg" alt="Image Alternative text" title="the journey home">
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Seattle Hotels</h5>
                                    <p>51947 reviews</p>
                                    <p class="mb0">381 offers from $63</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img\lack_of_blue_depresses_me_800x600.jpg" alt="Image Alternative text" title="lack of blue depresses me">
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Miami Hotels</h5>
                                    <p>76964 reviews</p>
                                    <p class="mb0">434 offers from $69</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img\waipio_valley_800x600.jpg" alt="Image Alternative text" title="waipio valley">
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Sydney Hotels</h5>
                                    <p>68651 reviews</p>
                                    <p class="mb0">935 offers from $54</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img\the_best_mode_of_transport_here_in_maldives_800x600.jpg" alt="Image Alternative text" title="the best mode of transport here in maldives">
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Virginia Beach Hotels</h5>
                                    <p>56727 reviews</p>
                                    <p class="mb0">768 offers from $51</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img\upper_lake_in_new_york_central_park_800x600.jpg" alt="Image Alternative text" title="Upper Lake in New York Central Park">
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Atlantic City Hotels</h5>
                                    <p>54809 reviews</p>
                                    <p class="mb0">648 offers from $66</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img\viva_las_vegas_800x600.jpg" alt="Image Alternative text" title="Viva Las Vegas">
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Las Vegas</h5>
                                    <p>63032 reviews</p>
                                    <p class="mb0">836 offers from $76</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img\el_inevitable_paso_del_tiempo_800x600.jpg" alt="Image Alternative text" title="El inevitable paso del tiempo">
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Budapest</h5>
                                    <p>65180 reviews</p>
                                    <p class="mb0">469 offers from $58</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img\new_york_at_an_angle_800x600.jpg" alt="Image Alternative text" title="new york at an angle">
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Boston</h5>
                                    <p>72984 reviews</p>
                                    <p class="mb0">250 offers from $58</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img\196_365_800x600.jpg" alt="Image Alternative text" title="196_365">
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>Paris</h5>
                                    <p>63340 reviews</p>
                                    <p class="mb0">296 offers from $73</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <h3 class="mb20">Top Deals</h3>
            <div class="row row-wrap">
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                <img src="img\amaze_800x600.jpg" alt="Image Alternative text" title="AMaze">
                                <h5 class="hover-title-center">Book Now</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-o"></i>
                                </li>
                            </ul>
                            <h5 class="thumb-title"><a class="text-darken" href="#">Fashion Glasses Showcase</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> Long Island City, NY (Long Island City - Astoria)</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">Free</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                <img src="img\upper_lake_in_new_york_central_park_800x600.jpg" alt="Image Alternative text" title="Upper Lake in New York Central Park">
                                <h5 class="hover-title-center">Book Now</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="thumb-title"><a class="text-darken" href="#">Central Park Trip</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> East Elmhurst, NY (LaGuardia Airport (LGA))</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">Free</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                <img src="img\pictures_at_the_museum_800x600.jpg" alt="Image Alternative text" title="Pictures at the museum">
                                <h5 class="hover-title-center">Book Now</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="thumb-title"><a class="text-darken" href="#">The Metropolitan Museum of Art</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> New York, NY (Chelsea)</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$35</span>  <small> /person</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                <img src="img\plunklock_live_in_cologne_800x600.jpg" alt="Image Alternative text" title="Plunklock live in Cologne">
                                <h5 class="hover-title-center">Book Now</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="thumb-title"><a class="text-darken" href="#">After Midnight</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> Queens (LaGuardia Airport (LGA))</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color"><small>average</small> $350</span>  <small> /person</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                <img src="img\me_with_the_uke_800x600.jpg" alt="Image Alternative text" title="Me with the Uke">
                                <h5 class="hover-title-center">Book Now</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-o"></i>
                                </li>
                            </ul>
                            <h5 class="thumb-title"><a class="text-darken" href="#">Ukle Master Class</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> New York, NY (Chelsea)</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">Free</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                <img src="img\trebbiano_ristorante_-_japenese_breakfast_800x600.jpg" alt="Image Alternative text" title="Trebbiano Ristorante - japenese breakfast">
                                <h5 class="hover-title-center">Book Now</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-o"></i>
                                </li>
                            </ul>
                            <h5 class="thumb-title"><a class="text-darken" href="#">Tea Ceremony</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> Long Island City, NY (Long Island City - Astoria)</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$300</span>  <small> /person</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                <img src="img\food_is_pride_800x600.jpg" alt="Image Alternative text" title="Food is Pride">
                                <h5 class="hover-title-center">Book Now</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-o"></i>
                                </li>
                            </ul>
                            <h5 class="thumb-title"><a class="text-darken" href="#">Food is Prime</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> Bronx (Bronx)</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$100</span>  <small> /person</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                <img src="img\4_strokes_of_fun_800x600.jpg" alt="Image Alternative text" title="4 Strokes of Fun">
                                <h5 class="hover-title-center">Book Now</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                                <li><i class="fa fa-star-o"></i>
                                </li>
                            </ul>
                            <h5 class="thumb-title"><a class="text-darken" href="#">Adrenaline Madness</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> Flushing, NY (LaGuardia Airport (LGA))</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$105</span>  <small> /person</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>


@endsection