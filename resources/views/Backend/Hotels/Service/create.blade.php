<!-- start: Content -->

<div class="form-element">
    <div class="col-md-12 padding-0">
        <form method="post" enctype="multipart/form-data" action="{{route('hotels.services.add')}}">
            @csrf
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="hotel_service_name">
                <span class="bar"></span>
                <label>Hotel Service Name</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="hotel_service_hour">
                <span class="bar"></span>
                <label>Hotel Serveice Time(Hours)</label>
            </div>
            <div class="form-group" style="margin-top:40px !important;">
                <span class="bar"></span>
                <label>Service Type</label>

                <div class="form-group form-animate-radio">
                    <label class="radio">
                        <input id="radio" name="hotel_service_type" type="radio" value="paid" checked>
                        <span class="outer">
                              <span class="inner"></span></span> Paid Service
                    </label>
                    <label class="radio">
                        <input id="radio" name="hotel_service_type" type="radio" checked value="free">
                        <span class="outer">
                              <span class="inner"></span></span> Free Service
                    </label>
                </div>
            </div>


            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="hotel_service_cost">
                <span class="bar"></span>
                <label>Service Cost if Any</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="hotel_service_cost_unit">
                <span class="bar"></span>
                <label>Service Cost Unit</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="hotel_service_description">
                <span class="bar"></span>
                <label>Hotel service Description</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="hotel_service_remark">
                <span class="bar"></span>
                <label>Hotel Service Remarks</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="submit btn btn-success" value="Submit" type="submit">
            </div>
        </form>
    </div>
</div>

<!-- end: content -->
