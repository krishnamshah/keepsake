<!-- start: Content -->

<div class="form-element">
    <div class="col-md-12 padding-0">
        <form method="post" enctype="multipart/form-data" action="{{route('rooms.add')}}">
            @csrf


            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="room_hotel_id">
                <span class="bar"></span>
                <label>Hotel ID</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="room_hotel_room_type_id">
                <span class="bar"></span>
                <label>Room Type ID</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="room_name">
                <span class="bar"></span>
                <label>Name</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="room_no_of_people">
                <span class="bar"></span>
                <label>No of People</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="room_max_extra_bed_up">
                <span class="bar"></span>
                <label>Max Extra Bed Upto</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="room_room_cost">
                <span class="bar"></span>
                <label>Room Cost</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="room_cost_per_extra_bed">
                <span class="bar"></span>
                <label>Cost Per Extra bed</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="room_no_of_rooms">
                <span class="bar"></span>
                <label>No Of Rooms</label>
            </div>
            <h3> Hotel Room Facilities</h3>
            <div class="col-md-12">

                @forelse($roomFacility as $facility)

                    <input type="checkbox" value="{{$facility->id}}" name="facilities_id[]">
                    {{$facility->title}} - {{$facility->description}}

                @empty
                    Sorry No faciliites Are avilable
                @endforelse

            </div>
            <hr/>
            <h3> Hotel Room Services</h3>
            <div class="col-md-12">

                @forelse($roomService as $service)

                    <input type="checkbox" value="{{$service->id}}" name="facilities_id[]">
                    {{$service->service_name}} - {{$service->service_description}}

                @empty
                    Sorry No Services Are avilable
                @endforelse

            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="submit btn btn-success" value="Submit" type="submit">
            </div>
        </form>
    </div>
</div>

<!-- end: content -->
