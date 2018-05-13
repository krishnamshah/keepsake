<h3 class="head text-center">List of Pages</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Page Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Parent Page</th>
            <th>Slug</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($pages as $page)
            <tr>
                <td>{{$page->id}}</td>
                <td>{{$page->title}}</td>
                <td>{{$page->description}}</td>
                <td>{{$page->parent_page}}</td>
                <td>{{$page->slug}}</td>
                <td>
                   <a href="{{route('pages.details',$page->id)}}"> <span class="label label-info">View</span></a>
                    <a href="{{route('pages.edit',$page->id)}}" ><span class="label label-warning">Edit</span></a>


                </td>
            </tr>
        @empty
            <tr>
                <td>Sorry no pages have been created please add one</td>

            </tr>
        @endforelse
        </tbody>
    </table>
</div>