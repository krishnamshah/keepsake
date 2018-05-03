<div class="form-element">
    <div class="col-md-12 panel" style="padding:50px;padding-bottom:70px;">
        <form method="post" enctype="multipart/form-data" action="{{route('hotels.search')}}">
            @csrf

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" required="" type="text" name="location_city">
                <span class="bar"></span>
                <label>Location [ City ]</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" required="" type="text" name="no_of_people">
                <span class="bar"></span>
                <label>Number of People</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" required="" type="text" name="start_date">
                <span class="bar"></span>
                <label>Start Date</label>
            </div>


            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" required="" type="text" name="end_date">
                <span class="bar"></span>
                <label>End Date</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="submit btn btn-success" value="Submit" type="submit">
            </div>
        </form>
    </div>
</div>
