<h3 class="head text-center">List of Hotels</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Hotel Room-Types Title</th>
            <th>Room-Types Description</th>

            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($roomTypes as $type)
            <tr>

                <td>{{$type->room_type }}</td>
                <td>{{$type->description}}</td>

                <td>

                    <a href="{{route('hotels.room.types.edit',$type->id)}}" ><span class="label label-warning">Edit</span></a>
                    {{--<a href="#"> <span class="label label-danger">Delete</span></a>--}}

                </td>
            </tr>
        @empty
            <tr>
                <td>Sorry no Room Types  have been created please add one</td>

            </tr>
        @endforelse
        </tbody>
    </table>
</div>