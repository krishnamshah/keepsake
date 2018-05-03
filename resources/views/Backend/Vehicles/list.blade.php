<h3 class="head text-center">List of Vehicles</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Vehicle Name</th>
            <th>Vehicle Type</th>
            <th>Description</th>
            <th>Transmission Type</th>
            {{--<th>2W/4W</th>--}}
            {{--<th>Fuel Option</th>--}}
            {{--<th>Driving Option</th>--}}
            <th>No Of Passengers</th>
            {{--<th>Image</th>--}}
            {{--<th>Seat Pattern</th>--}}
            <th>Rate Per day</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($vehicles as $vehicle)
            <tr>

                <td>{{$vehicle->name}}</td>
                <td>{{$vehicle->type}}</td>
                <td>{{$vehicle->description}}</td>
                <td>{{$vehicle->gare}}</td>
                {{--<td>{{$vehicle->driving_option}}</td>--}}
                {{--<td>{{$vehicle->fule_option}}</td>--}}
                {{--<td>{{$vehicle->diving_option}}</td>--}}
                <td>{{$vehicle->no_of_People}}</td>
                {{--<td>{{$vehicle->image}}</td>--}}
                {{--<td>{{$vehicle->sit_pattern}}</td>--}}
                <td>{{$vehicle->rate_perday}}</td>
                <td>
                   <a href="{{route('vehicles.details',$vehicle->id)}}"> <span class="label label-info">View</span></a>
                    <a href="{{route('vehicles.edit',$vehicle->id)}}" ><span class="label label-warning">Edit</span></a>
                    {{--<a href="{{route((($vehicle->user->status=='active')?'vehicles.deactivate':'vehicles.activate'),$vehicle->id)}}"> <span class="label label-primary">{{($vehicle ->user->status=='active')?'Deactive':'Active'}}</span></a>--}}
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