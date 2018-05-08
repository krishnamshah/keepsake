<h3 class="head text-center">List of Agents</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Agent Name</th>
            <th>Pan No</th>
            <th>Office Contact</th>
            <th>Contact Person</th>
            <th>Contact Person Phome</th>
            <th>User Email</th>
            <th>User Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($agents as $agent)
            <tr>
                <td>{{$agent->name}}</td>
                <td>{{$agent->pan_no}}</td>
                <td>{{$agent->office_no}}</td>
                <td>{{$agent->name_of_person}}</td>
                <td>{{$agent->contact_person_pho}}</td>
                <td>{{$agent->user->email}}</td>
                <td>{{$agent->user->status}}</td>
                <td>
                   <a href="{{route('agent.details',$agent->id)}}"> <span class="label label-info">View</span></a>
                    <a href="{{route('agent.update',$agent->id)}}" ><span class="label label-warning">Edit</span></a>
                    <a href="{{route((($agent->user->status=='active')?'agent.deactivate':'agent.activate'),$agent->id)}}"> <span class="label label-primary">{{($agent->user->status=='active')?'Deactive':'Active'}}</span></a>
                    <a href="#"> <span class="label label-danger">Delete</span></a>

                </td>
            </tr>
        @empty
            <tr>
                <td>Sorry no agent have been created please add one</td>

            </tr>
        @endforelse
        </tbody>
    </table>
</div>