<!-- start: Content -->

<div class="form-element">
    <div class="col-md-12 padding-0">
        <form method="post" enctype="multipart/form-data" action="{{route('vehicles.add')}}">
            @csrf
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="vehicle_name">
                <span class="bar"></span>
                <label>Vehicle Name</label>
            </div><div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="vehicle_locations">
                <span class="bar"></span>
                <label>Places Vehicle Goes</label>
            </div>
            {{--<div class="form-group form-animate-text" style="margin-top:40px !important;">--}}
            {{--<input type="text" class="form-text" required name="vehicle_type">--}}
            {{--<span class="bar"></span>--}}

            <div class="form-group form-element">

                <label>Vehicle Type</label>

                <div class="col-sm-12 padding-1">
                    <div class="col-sm-12 padding-1">
                        <select class="select2-A" name="vehicle_type">
                            <option value="car">Car</option>
                            <option value="bus">Bus</option>
                            <option value="jeep">Jeep</option>
                            <option value="suv">SUV</option>
                        </select>
                    </div>
                </div>
            </div>
            {{--</div>--}}
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="vehicle_description">
                <span class="bar"></span>
                <label>Vehicle Descriptions</label>
            </div>
            <div class="form-group form-animate-radio" style="margin-top:40px !important;">
                <span class="bar"></span>
                <label>Vehicle Transmission Type</label>
                <div class="form-animate-radio">
                    <label class="radio">
                        <input id="radio1" name="gare" type="radio" value="automatic">
                        <span class="outer">
                              <span class="inner"></span></span> Auto
                    </label>
                    <label class="radio">
                        <input id="radio1" name="gare" type="radio" value="mannual" checked>
                        <span class="outer">
                              <span class="inner"></span></span> Manual
                    </label>
                </div>
            </div>

            <div class="form-group form-animate-radio" style="margin-top:40px !important;">
                {{--<input type="text" class="form-text" required name="gare">--}}
                <span class="bar"></span>
                <label>2-Wheeler/ 4-Wheeler</label>
                <div class="form-animate-radio">
                    <label class="radio">
                        <input id="radio1" name="driving_option" type="radio" value="2wd" checked>
                        <span class="outer">
                              <span class="inner"></span></span> 2-Wheeler
                    </label>
                    <label class="radio">
                        <input id="radio1" name="driving_option" type="radio" value="4wd">
                        <span class="outer">
                              <span class="inner"></span></span> 4-Wheeler
                    </label>
                </div>
            </div>


            <div class="form-group form-animate-radio" style="margin-top:40px !important;">

                <span class="bar"></span>
                <label>Fuel Option</label>
                <div class="form-animate-radio">
                    <label class="radio">
                        <input id="radio1" name="fule_option" type="radio" value="petrol" checked>
                        <span class="outer">
                              <span class="inner"></span></span> Petrol
                    </label>
                    <label class="radio">
                        <input id="radio1" name="fule_option" type="radio" value="deseal">
                        <span class="outer">
                              <span class="inner"></span></span> Diesel
                    </label>
                </div>
            </div>

            <div class="form-group form-animate-radio" style="margin-top:40px !important;">

                <span class="bar"></span>
                <label>Driving Option</label>
                <div class="form-animate-radio">
                    <label class="radio">
                        <input id="radio1" name="diving_option" type="radio" value="with driver" checked>
                        <span class="outer">
                              <span class="inner"></span></span> With Driver
                    </label>
                    <label class="radio">
                        <input id="radio1" name="diving_option" type="radio" value="without driver">
                        <span class="outer">
                              <span class="inner"></span></span> Without Driver
                    </label>
                </div>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="sit_pattern">
                <span class="bar"></span>
                <label>Seat Pattern</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="vehicle_no_of_people">
                <span class="bar"></span>
                <label>No of Passengers</label>
            </div>


            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" type="file" name="vehicle_image">
                <span class="bar"></span>
                <label>vehicle Image</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="rate_perday">
                <span class="bar"></span>
                <label>Rate/Day</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="vehicle_cost_include_excludes">
                <span class="bar"></span>
                <label>Vehicle Cost Includes & Excludes</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="submit btn btn-success" value="Submit" type="submit">
            </div>
        </form>
    </div>
</div>

<!-- end: content -->
