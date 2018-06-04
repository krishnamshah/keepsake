<!-- start: Content -->
<div class="form-element">
    <div class="col-md-12 padding-0">
        <form method="post" enctype="multipart/form-data" action="{{route('hotels.room.amenities.add')}}">
            @csrf
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="hotel_room_amenities_title">
                <span class="bar"></span>
                <label>Hotel Room Amenities Title</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text"  class="form-text" required name="hotel_room_amenities_description" />
                <span class="bar"></span>
                <label>Hotel Room Amenities Description</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text"  class="form-text" required name="hotel_room_amenities_remark" />
                <span class="bar"></span>
                <label>Hotel Room Amenities Remarks</label>
            </div>

    <div class="form-group form-animate-text" style="margin-top:40px !important;">
        <input class="submit btn btn-success" value="Submit" type="submit">
    </div>
    </form>
</div>
</div>