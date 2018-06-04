<!-- start: Content -->

<div class="form-element">
    <div class="col-md-12 padding-0">
        <form method="post" enctype="multipart/form-data" action="{{route('rooms.add')}}">
            @csrf


            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <label>Hotel</label>
                <select required name="room_hotel_id">
                    <option>Select your Hotel</option>
                    @forelse($hotels as $hotel)
                        <option value="{{$hotel->id}}">{{$hotel->hotel_name}}</option>
                    @empty
                        <option>Sorry no hotle are avilable</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <label>Room Type</label>
                <select required name="room_hotel_room_type_id">
                    <option>Select your room types</option>
                    @forelse($roomTypes as $roomType)
                        <option value="{{$roomType->id}}">{{$roomType->room_type}}</option>
                    @empty
                        <option>Sorry no room types are avilable</option>
                    @endforelse
                </select>
                {{--value="{{$room->hotel_room_type_id}}">--}}


            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="room_name">
                <span class="bar"></span>
                <label>Name</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="no_of_adult">
                <span class="bar"></span>
                <label>No of Adult</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="no_of_child">
                <span class="bar"></span>
                <label>No of Child</label>
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
                <input type="text" class="form-text" required name="room_cost_ep_plan">
                <span class="bar"></span>
                <label>Cost for EP Plan</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="room_cost_ap_plan">
                <span class="bar"></span>
                <label>Cost for AP Plan</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="room_cost_map_plan">
                <span class="bar"></span>
                <label>Cost for MAP Plan</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="room_cost_cp_plan">
                <span class="bar"></span>
                <label>Cost for CP Plan</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="room_no_of_rooms">
                <span class="bar"></span>
                <label>No Of Rooms Available</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input id="hotel_logo" type="file" class="form-text{{ $errors->has('hotel_room_image') ? ' is-invalid' : '' }}"
                       name="hotel_room_image" value="{{ old('hotel_room_image') }}" required autofocus>


                <span class="bar"></span>
                <label>Hotel Room Feature Image</label>
            </div>
            <h3> Hotel Room Bed Types</h3>
            <div class="col-md-12">

                @forelse($bedTypes as $bedType)

                    <input type="checkbox" value="{{$bedType->id}}" name="bedTypes_id[]">
                    {{$bedType->bed_type}} - {{$bedType->bed_type_remarks}}

                @empty
                    Sorry No Bed Types Are avilable
                @endforelse

            </div>
            <h3> Hotel Room Services</h3>
            <div class="col-md-12">

                @forelse($roomService as $service)

                    <input type="checkbox" value="{{$service->id}}" name="service_id[]">
                    {{$service->service_name}} - {{$service->service_description}}

                @empty
                    Sorry No Services Are avilable
                @endforelse

            </div>
            <h3> Hotel Room Amenities</h3>
            <div class="col-md-12">

                @forelse($roomAmenities as $amenities)

                    <input type="checkbox" value="{{$amenities->id}}" name="amenity_id[]">
                    {{$amenities->amenity_name}} - {{$amenities->amenity_description}}

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
