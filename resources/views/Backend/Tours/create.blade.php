<!-- start: Content -->

<div class="form-element">
    <div class="col-md-12 padding-0">
        <form method="post" enctype="multipart/form-data" action="{{route('tours.add')}}">
            @csrf
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="tour_name">
                <span class="bar"></span>
                <label>Tour Name</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <textarea type="text" class="form-text" required name="tour_description"></textarea>
                <span class="bar"></span>
                <label>Tour Descriptions</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <textarea type="text" class="form-text" required name="tour_itineary"></textarea>
                <span class="bar"></span>
                <label>Tour Itineary</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="tour_tag">
                <span class="bar"></span>
                <label>Tour Tag</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="tour_duration">
                <span class="bar"></span>
                <label>Tour Duration</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="tour_price">
                <span class="bar"></span>
                <label>Rate Per Person</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="tour_group_rate">
                <span class="bar"></span>
                <label>Rate Per Group</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="tour_bestime">
                <span class="bar"></span>
                <label>Best Time</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="tour_group_size">
                <span class="bar"></span>
                <label>Group Size</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" type="file" name="tour_image">
                <span class="bar"></span>
                <label>Tour Image</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <textarea type="text" class="form-text" required name="tour_cost_include_excludes"></textarea>
                <span class="bar"></span>
                <label>Tour Cost Includes & Excludes</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="submit btn btn-success" value="Submit" type="submit">
            </div>
        </form>
    </div>
</div>

<!-- end: content -->
