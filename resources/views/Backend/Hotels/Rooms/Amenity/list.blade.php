<h3 class="head text-center">List of Hotels</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Hotel Room Amenities Title</th>
            <th>Amenities Description</th>
            <th>Amenities Remarks</th>
            <th>Amenities Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($amenities as $amenity)
            <tr>

                <td>{{$amenity->amenity_name}}</td>
                <td>{{$amenity->amenity_description}}</td>
                <td>{{$amenity->remarks}}</td>
                <td>{{($amenity->enable==1)?"Enabled":"Disabled"}}</td>

                <td>

                    <a href="{{route('hotels.room.amenities.edit',$amenity->id)}}" ><span class="label label-warning">Edit</span></a>
                    <a href="{{route((($amenity->enable==1)?'hotels.room.amenities.deactivate':'hotels.room.amenities.activate'),$amenity->id)}}">
                        <span class="label label-primary">{{($amenity->enable==1)?'Deactive':'Active'}}</span></a>
                    {{--<a href="#"> <span class="label label-danger">Delete</span></a>--}}

                </td>
            </tr>
        @empty
            <tr>
                <td>Sorry no Facilities have been created please add one</td>

            </tr>
        @endforelse
        </tbody>
    </table>
</div>