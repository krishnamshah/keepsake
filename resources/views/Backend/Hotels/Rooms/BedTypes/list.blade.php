<h3 class="head text-center">List of Hotels</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Hotel Room Bed Type</th>
            <th>Remarks</th>

            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($bedtypes as $type)
            <tr>

                <td>{{$type->bed_type}}</td>
                <td>{{$type->bed_type_remarks}}</td>

                <td>

                    <a href="{{route('hotels.room.bedTypes.edit',$type->id)}}" ><span class="label label-warning">Edit</span></a>

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