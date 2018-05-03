<div class="search-tabs search-tabs-bg search-tabs-to-top">
    <div class="tabbable">
        <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-building-o"></i>
                    <span>Hotels</span></a>
            </li>
            <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-plane"></i> <span>Flights</span></a>
            </li>
            <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-car"></i> <span>Cars</span></a>
            </li>
            <li><a href="#tab-5" data-toggle="tab"><i class="fa fa-bolt"></i> <span>Tours</span></a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab-1">
                <h2>Search and Save on Hotels</h2>
                <form method="get" action="{{route('hotel.result')}}">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-group-lg form-group-icon-left"><i
                                        class="fa fa-map-marker input-icon"></i>
                                <label>Where are you going?</label>
                                <input class="typeahead form-control" placeholder="City" type="text" name="city">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="input-daterange" data-date-format="yyyy-mm-dd">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group form-group-lg form-group-icon-left"><i
                                                    class="fa fa-calendar input-icon input-icon-highlight"></i>
                                            <label>Check-in</label>
                                            <input class="form-control" name="start" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-group-lg form-group-icon-left"><i
                                                    class="fa fa-calendar input-icon input-icon-highlight"></i>
                                            <label>Check-out</label>
                                            <input class="form-control" name="end" type="text">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group form-group-lg form-group-select-plus">
                                            <label>Guests</label>
                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">


                                                <select class="form-control" name="no_of_People">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Search for Hotels</button>
                </form>
            </div>

            <div class="tab-pane fade" id="tab-2">
                <h2>Search for Cheap Flights</h2>
                <form method="get" action="#">
                    <div class="tabbable">
                        <ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
                            <li class="active"><a href="#flight-search-1" data-toggle="tab">Round Trip</a>
                            </li>
                            <li><a href="#flight-search-2" data-toggle="tab">One Way</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="flight-search-1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-lg form-group-icon-left"><i
                                                            class="fa fa-map-marker input-icon"></i>
                                                    <label>From</label>
                                                    <input class="typeahead form-control"
                                                           placeholder="City, Airport, U.S. Zip" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-lg form-group-icon-left"><i
                                                            class="fa fa-map-marker input-icon"></i>
                                                    <label>To</label>
                                                    <input class="typeahead form-control"
                                                           placeholder="City, Airport, U.S. Zip" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-daterange" data-date-format="M d, D">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i
                                                                class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                        <label>Departing</label>
                                                        <input class="form-control" name="start" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i
                                                                class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                        <label>Returning</label>
                                                        <input class="form-control" name="end" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-lg form-group-select-plus">
                                                        <label>Passngers</label>
                                                        <div class="btn-group btn-group-select-num"
                                                             data-toggle="buttons">
                                                            <label class="btn btn-primary active">
                                                                <input type="radio" name="options">1</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options">2</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options">3</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options">3+</label>
                                                        </div>
                                                        <select class="form-control hidden">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option selected="selected">4</option>
                                                            <option>5</option>
                                                            <option>6</option>
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
                            </div>
                            <div class="tab-pane fade" id="flight-search-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-lg form-group-icon-left"><i
                                                            class="fa fa-map-marker input-icon"></i>
                                                    <label>From</label>
                                                    <input class="typeahead form-control"
                                                           placeholder="City, Airport, U.S. Zip" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-lg form-group-icon-left"><i
                                                            class="fa fa-map-marker input-icon"></i>
                                                    <label>To</label>
                                                    <input class="typeahead form-control"
                                                           placeholder="City, Airport, U.S. Zip" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-daterange" data-date-format="M d, D">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i
                                                                class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                        <label>Departing</label>
                                                        <input class="date-pick form-control" data-date-format="M d, D"
                                                               type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-lg form-group-select-plus">
                                                        <label>Passngers</label>
                                                        <div class="btn-group btn-group-select-num"
                                                             data-toggle="buttons">
                                                            <label class="btn btn-primary active">
                                                                <input type="radio" name="options">1</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options">2</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options">3</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options">3+</label>
                                                        </div>
                                                        <select class="form-control hidden">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option selected="selected">4</option>
                                                            <option>5</option>
                                                            <option>6</option>
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
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Search for Flights</button>
                </form>
            </div>

            <div class="tab-pane fade" id="tab-4">
                <h2>Search for Cheap Rental Cars</h2>
                <form method="get" action="{{route('vehicle.search')}}">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group form-group-lg form-group-icon-left"><i
                                        class="fa fa-map-marker input-icon"></i>
                                <label>From</label>
                                <input class="typeahead form-control" placeholder="City or Point of Interest"
                                       type="text" name="from">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-lg form-group-icon-left"><i
                                        class="fa fa-map-marker input-icon"></i>
                                <label>To</label>
                                <input class="typeahead form-control" placeholder="City or Point of Interest"
                                       type="text" name="to">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group form-group-lg form-group-select-plus">
                                <label>Travellers</label>
                                <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                    <select class="form-control" name="no_of_People">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-daterange" data-date-format="yyyy-mm-dd">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg form-group-icon-left"><i
                                                    class="fa fa-calendar input-icon input-icon-highlight"></i>
                                            <label>Pick-up Date</label>
                                            <input class="form-control" name="start" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg form-group-icon-left"><i
                                                    class="fa fa-calendar input-icon input-icon-highlight"></i>
                                            <label>Drop-ff Date</label>
                                            <input class="form-control" name="end" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Search for Rental Cars</button>
                </form>
            </div>

            <div class="tab-pane fade" id="tab-5">
                <h2>Search for Tours</h2>
                <form method="get" action="{{route('tour.search')}}">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-group-lg form-group-icon-left"><i
                                        class="fa fa-map-marker input-icon"></i>
                                <label>Where do you want to go?</label>
                                <input class="typeahead form-control" placeholder="City, Airport" type="text" name="tag">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="input-daterange" data-date-format="yyyy-mm-dd">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg form-group-icon-left"><i
                                                    class="fa fa-calendar input-icon input-icon-highlight"></i>
                                            <label>From</label>
                                            <input class="form-control" name="start" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-lg form-group-icon-left"><i
                                                    class="fa fa-calendar input-icon input-icon-highlight"></i>
                                            <label>To</label>
                                            <input class="form-control" name="end" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-lg form-group-select-plus">
                                <label>Guests</label>
                                <div class="btn-group btn-group-select-num" data-toggle="buttons">


                                    <select class="form-control" name="no_of_People">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Search for Tours</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="gap"></div>