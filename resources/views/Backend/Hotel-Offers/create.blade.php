<!-- start: Content -->

<div class="form-element">
    <div class="col-md-12 padding-0">
        <form method="post" enctype="multipart/form-data" action="{{route('HotelOffers.add')}}">
            @csrf
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="hotel_offer_title">
                <span class="bar"></span>
                <label>Hotel Offer Title</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <textarea type="text" class="form-text" required name="hotel_offer_description"></textarea>
                <span class="bar"></span>
                <label>Hotel Offer Descriptions</label>
            </div>

            <div class="form-group form-animate-text">
                <input class="form-text dateAnimate" required="" data-dtp="dtp_g91iZ" type="text" name="hotel_offer_start_date">
                <span class="bar"></span>
                <label><span class="fa fa-calendar"></span> Hotel Offer Start Date</label>
            </div>
            <div class="form-group form-animate-text">
                <input class="form-text dateAnimate" required="" data-dtp="dtp_g91iZ" type="text" name="hotel_offer_end_date">
                <span class="bar"></span>
                <label><span class="fa fa-calendar"></span> Hotel Offer End Date</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="submit btn btn-success" value="Submit" type="submit">
            </div>
        </form>
    </div>
</div>

<!-- end: content -->
