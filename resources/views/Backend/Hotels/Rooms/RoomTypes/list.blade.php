<h3 class="head text-center">List of Hotels</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Hotel Room-Types Title</th>
            <th>Room-Types Description</th>
            <th>Room-Types Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($types as $type)
            <tr>

                <td>{{$type->title}}</td>
                <td>{{$type->description}}</td>
                <td>{{($type->enable==1)?"Enabled":"Disabled"}}</td>

                <td>

                    <a href="{{route('hotels.room.types.edit',$type->id)}}" ><span class="label label-warning">Edit</span></a>
                    <a href="{{route((($type->enable==1)?'hotels.room.types.deactivate':'hotels.room.types.activate'),$type->id)}}">
                        <span class="label label-primary">{{($type->enable==1)?'Deactive':'Active'}}</span></a>
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