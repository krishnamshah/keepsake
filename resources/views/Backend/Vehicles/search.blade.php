<div class="form-element">
    <div class="col-md-12 panel" style="padding:50px;padding-bottom:70px;">
        <form method="post" enctype="multipart/form-data" action="{{route('vehicles.search')}}">
            @csrf

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" required="" type="text" name="from">
                <span class="bar"></span>
                <label>From</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" required="" type="text" name="to">
                <span class="bar"></span>
                <label>To</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" required="" type="text" name="no_of_People">
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
