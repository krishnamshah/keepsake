<h3 class="head text-center">List of Bookings</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Booking ID</th>
            {{--<th>Group Size</th>--}}
            <th>Room ID</th>
            <th>Total Number of Traveller</th>
            <th>Start Date</th>
            <th>End Date</th>
            
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($bookings as $booking)
            <tr>
                <td>{{$booking->id}}</td>
                {{--<td>{{$booking->group_size}}</td>--}}
                <td>{{$booking->room_id}}</td>
                <td>{{$booking->no_of_people}}</td>
                <td>{{$booking->start_date}}</td>
                <td>{{$booking->end_date}}</td>
                <td>
                   <a href="{{route('bookingsRoom.details',$booking->id)}}"> <span class="label label-info">View</span></a>
                    {{--<a href="{{route('bookings.edit',$booking->id)}}" ><span class="label label-warning">Edit</span></a>--}}
{{--                    <a href="{{route((($booking->user->status=='active')?'bookings.deactivate':'bookings.activate'),$booking->id)}}"> <span class="label label-primary">{{($booking->user->status=='active')?'Deactive':'Active'}}</span></a>--}}
                    {{--<a href="#"> <span class="label label-danger">Delete</span></a>--}}

                </td>
            </tr>
        @empty
            <tr>
                <td>Sorry no bookings have been created please add one</td>

            </tr>
        @endforelse
        </tbody>
    </table>
</div>