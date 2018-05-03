<h3 class="head text-center">List of Hotels</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Hotel Name</th>
            <th>Contact Person</th>
            <th>Address</th>
            <th>Rating</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($hotels as $hotel)
            <tr>

                <td>{{$hotel->hotel_name}}</td>
                <td>{{$hotel->contact_person}}</td>
                <td>{{$hotel->street}}, {{$hotel->city}}, {{$hotel->province}}</td>
                <td>{{$hotel->hotel_star_rating}}</td>
                <td>
                   <a href="{{route('hotels.details',$hotel->id)}}"> <span class="label label-info">View</span></a>
                    <a href="{{route('hotels.edit',$hotel->id)}}" ><span class="label label-warning">Edit</span></a>
                    <a href="{{route('hotels.images',$hotel->id)}}" ><span class="label label-warning">Hotel Image Gallery</span></a>
                    {{--<a href="{{route((($Hotel->user->status=='active')?'Hotels.deactivate':'Hotels.activate'),$Hotel->id)}}"> <span class="label label-primary">{{($Hotel ->user->status=='active')?'Deactive':'Active'}}</span></a>--}}
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