<h3 class="head text-center">List of Agents</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Customer Name</th>
            <th>Resident No</th>
            <th>Cell</th>
            <th>Id No</th>
            <th>Id Type</th>
            <th>User Email</th>
            <th>User Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($customers as $customer)
            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->resident_no}}</td>
                <td>{{$customer->cell}}</td>
                <td>{{$customer->id_no}}</td>
                <td>{{$customer->id_type}}</td>
                <td>{{$customer->user->email}}</td>
                <td>{{$customer->user->status}}</td>
                <td>
                   <a href="{{route('customer.details',$customer->id)}}"> <span class="label label-info">View</span></a>
                    <a href="{{route('customer.update',$customer->id)}}" ><span class="label label-warning">Edit</span></a>
                    <a href="{{route((($customer->user->status=='active')?'customer.deactivate':'customer.activate'),$customer->id)}}"> <span class="label label-primary">{{($customer->user->status=='active')?'Deactive':'Active'}}</span></a>
                    <a href="#"> <span class="label label-danger">Delete</span></a>

                </td>
            </tr>
        @empty
            <tr>
                <td>Sorry no customer have been created please add one</td>

            </tr>
        @endforelse
        </tbody>
    </table>
</div>