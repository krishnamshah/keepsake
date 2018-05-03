<div class="form-element">
    <div class="col-md-12 panel" style="padding:50px;padding-bottom:70px;">
        <form method="post" enctype="multipart/form-data" action="{{route('tours.search')}}">
            @csrf

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" required="" type="text" name="tour_tag">
                <span class="bar"></span>
                <label>Location</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" required="" type="text" name="tour_no_of_People">
                <span class="bar"></span>
                <label>Number of People</label>
            </div>

            <div class="form-group form-animate-text">
                <input class="form-text dateAnimate" required="" data-dtp="dtp_g91iZ" type="text" name="tour_start">
                <span class="bar"></span>
                <label><span class="fa fa-calendar"></span>Start Date</label>
            </div>
            <div class="form-group form-animate-text">
                <input class="form-text dateAnimate" required="" data-dtp="dtp_g91iZ" type="text" name="tour_end">
                <span class="bar"></span>
                <label><span class="fa fa-calendar"></span>End Date</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="submit btn btn-success" value="Submit" type="submit">
            </div>
        </form>
    </div>
</div>
