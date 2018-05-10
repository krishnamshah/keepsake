<h3 class="head text-center">List of Tours</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Package Name</th>
            {{--<th>Group Size</th>--}}
            <th>Duration</th>
            <th>Best Time</th>
            <th>Rate Per Person</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($tours as $tour)
            <tr>
                <td>{{$tour->name}}</td>
                {{--<td>{{$tour->group_size}}</td>--}}
                <td>{{$tour->duration}}</td>
                <td>{{$tour->best_time}}</td>
                <td>{{$tour->price}}</td>
                <td>
                   <a href="{{route('tours.details',$tour->id)}}"> <span class="label label-info">View</span></a>
                    <a href="{{route('tours.edit',$tour->id)}}" ><span class="label label-warning">Edit</span></a>
                    <a href="{{route('tours.images',$tour->id)}}" ><span class="label label-warning">Tour Image Gallery</span></a>

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