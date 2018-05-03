<h3 class="head text-center">List of Rooms</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Room Name</th>
            <th>Room Type</th>
            <th>Rate per Day</th>
            <th>Room Facility</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($rooms as $room)
            <tr>

                <td>{{$room->name}}</td>
                <td>{{$room->type}}</td>
                <td>{{$room->room_rate}}</td>
                <td>{{$room->room_facility}}</td>
                <td>
                    <a href="{{route('rooms.details',$room->id)}}"> <span class="label label-info">View</span></a>
                    <a href="{{route('rooms.edit',$room->id)}}" ><span class="label label-warning">Edit</span></a>
                    <a href="{{route('bookingsRoom.add',[$id,$location_city,$start_date,$end_date,$no_of_people])}}"><input type="submit" class="btn btn-circle btn-sm" value="Book"></a>

                    {{--<a href="{{route((($room->user->status=='active')?'rooms.deactivate':'rooms.activate'),$room->id)}}"> <span class="label label-primary">{{($room ->user->status=='active')?'Deactive':'Active'}}</span></a>--}}
                    {{--<a href="#"> <span class="label label-danger">Delete</span></a>--}}

                </td>
            </tr>
        @empty
            <tr>
                <td>Sorry no tours have been created please add one</td>

            </tr>
        @endforelse
        </tbody>
    </table>
</div>