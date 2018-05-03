<!-- start: Content -->
<div class="form-element">
    <div class="col-md-12 padding-0">
        <form method="post" enctype="multipart/form-data" action="{{route('hotels.room.facilities.add')}}">
            @csrf
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="hotel_room_facilities_title">
                <span class="bar"></span>
                <label>Hotel Room Facility Title</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text"  class="form-text" required name="hotel_room_facilities_description" />
                <span class="bar"></span>
                <label>Hotel Room Facility Description</label>
            </div>
    </div>
    <div class="form-group form-animate-text" style="margin-top:40px !important;">
        <input class="submit btn btn-success" value="Submit" type="submit">
    </div>
    </form>
</div>
</div>