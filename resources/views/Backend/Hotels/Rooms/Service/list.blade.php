<h3 class="head text-center">List of Hotels Room Services</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Hotel Room Service Name</th>
            <th>Hotel Room Service Description</th>
            <th>Service Hour</th>
            <th>Service Type</th>
            <th>Service Status</th>
            <th>Cost</th>
            <th>Cost Unit</th>
            <th>Service Remarks</th>
        </tr>
        </thead>
        <tbody>
        @forelse($services as $service)
            <tr>

                <td>{{$service->service_name}}</td>
                <td>{{$service->service_description}}</td>
                <td>{{$service->service_hour}}</td>
                <td>{{$service->service_type}}</td>
                <td>{{($service->enable==1)?"Enabled":"Disabled"}}</td>
                <td>{{$service->cost}}</td>
                <td>{{$service->unit}}</td>
                <td>{{$service->remarks}}</td>

                <td>
                    <a href="{{route('hotels.services.edit',$service->id)}}" ><span class="label label-warning">Edit</span></a>
                    <a href="{{route((($service->enable==1)?'hotels.services.deactivate':'hotels.services.activate'),$service->id)}}">
                        <span class="label label-primary">{{($service->enable==1)?'Deactive':'Active'}}</span></a>
                    {{--<a href="#"> <span class="label label-danger">Delete</span></a>--}}

                </td>
            </tr>
        @empty
            <tr>
                <td>Sorry no Hotel Service have been created please add one</td>

            </tr>
        @endforelse
        </tbody>
    </table>
</div>