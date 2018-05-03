@extends('Frontend.layouts.app1')

@section('content')

        <div class="container">
            <form>
                <div class="tabbable">
                    <ul class="nav nav-pills nav-sm nav-no-br mb10" id="myTab">
                        <li class="active"><a href="#flight-search-1" data-toggle="tab">Round Trip</a>
                        </li>
                        <li><a href="#flight-search-2" data-toggle="tab">One Way</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="flight-search-1">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                        <label>From</label>
                                        <input class="typeahead form-control" placeholder="City, Hotel Name or U.S. Zip Code" type="text">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                        <label>To</label>
                                        <input class="typeahead form-control" placeholder="City, Hotel Name or U.S. Zip Code" type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-daterange" data-date-format="MM d, D">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                                    <label>Departing</label>
                                                    <input class="form-control" name="start" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                                    <label>Returning</label>
                                                    <input class="form-control" name="end" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-group-select-plus">
                                        <label>Passengers</label>
                                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <input type="radio" name="options">1</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options">2</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options">3</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options">4</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options">5</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options">5+</label>
                                        </div>
                                        <select class="form-control hidden">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option selected="selected">6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="flight-search-2">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                        <label>To</label>
                                        <input class="typeahead form-control" placeholder="City, Hotel Name or U.S. Zip Code" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                        <label>Departing</label>
                                        <input class="date-pick form-control" data-date-format="MM d, D" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-group-select-plus">
                                        <label>Passengers</label>
                                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <input type="radio" name="options">1</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options">2</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options">3</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options">4</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options">5</label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options">5+</label>
                                        </div>
                                        <select class="form-control hidden">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option selected="selected">6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input class="btn btn-primary mt10" type="submit" value="Search for Flights">
            </form>
            <div class="gap gap-small"></div>
            <h3 class="mb20">Popular Flight Destinations</h3>
            <div class="row row-wrap">
                <div class="col-md-3">
                    <div class="thumb">
                        <a class="hover-img" href="#">
                            <img src="img\gaviota_en_el_top_800x600.jpg" alt="Image Alternative text" title="Gaviota en el Top">
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>New York City Hotels</h5>
                                    <p>54642 reviews</p>
                                    <p class="mb0">722 offers from $53</p>
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
                                    <p>54112 reviews</p>
                                    <p class="mb0">356 offers from $88</p>
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
                                    <p>67467 reviews</p>
                                    <p class="mb0">737 offers from $85</p>
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
                                    <p>76046 reviews</p>
                                    <p class="mb0">282 offers from $56</p>
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
                                    <p>60597 reviews</p>
                                    <p class="mb0">843 offers from $66</p>
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
                                    <p>75261 reviews</p>
                                    <p class="mb0">844 offers from $98</p>
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
                                    <p>57369 reviews</p>
                                    <p class="mb0">433 offers from $70</p>
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
                                    <p>76040 reviews</p>
                                    <p class="mb0">602 offers from $51</p>
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
                                    <p>72497 reviews</p>
                                    <p class="mb0">880 offers from $68</p>
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
                                    <p>67014 reviews</p>
                                    <p class="mb0">426 offers from $77</p>
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
                                    <p>59633 reviews</p>
                                    <p class="mb0">424 offers from $73</p>
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
                                    <p>70440 reviews</p>
                                    <p class="mb0">374 offers from $82</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>
@endsection
