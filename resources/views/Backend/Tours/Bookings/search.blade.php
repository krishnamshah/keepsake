<div class="form-element">
    <div class="col-md-12 panel" style="padding:50px;padding-bottom:70px;">
        <form method="post" enctype="multipart/form-data" action="{{route('bookingsTour.search')}}">
            @csrf

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" required="" type="text" name="bookingTour_id">
                <span class="bar"></span>
                <label>Booking ID</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" required="" type="text" name="bookingTour_tour_id">
                <span class="bar"></span>
                <label>Tour ID</label>
            </div>

            <div class="form-group form-animate-text">
                <input class="form-text dateAnimate" required="" data-dtp="dtp_g91iZ" type="text" name="bookingTour_start_date">
                <span class="bar"></span>
                <label><span class="fa fa-calendar"></span>Start Date</label>
            </div>
            <div class="form-group form-animate-text">
                <input class="form-text dateAnimate" required="" data-dtp="dtp_g91iZ" type="text" name="bookingTour_end_date">
                <span class="bar"></span>
                <label><span class="fa fa-calendar"></span>End Date</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="submit btn btn-success" value="Submit" type="submit">
            </div>
        </form>
    </div>
</div>
