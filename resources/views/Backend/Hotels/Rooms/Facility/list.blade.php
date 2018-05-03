<h3 class="head text-center">List of Hotels</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Hotel Facility Title</th>
            <th>Facility Description</th>
            <th>Facilities Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($facilities as $facility)
            <tr>

                <td>{{$facility->title}}</td>
                <td>{{$facility->description}}</td>
                <td>{{($facility->enable==1)?"Enabled":"Disabled"}}</td>

                <td>

                    <a href="{{route('hotels.room.facilities.edit',$facility->id)}}" ><span class="label label-warning">Edit</span></a>
                    <a href="{{route((($facility->enable==1)?'hotels.room.facilities.deactivate':'hotels.room.facilities.activate'),$facility->id)}}">
                        <span class="label label-primary">{{($facility->enable==1)?'Deactive':'Active'}}</span></a>
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