<h3 class="head text-center">List of Agents</h3>
<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered"
           width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Slider Title</th>
            <th>Slider Description</th>
            <th>Slider Image</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($lists as $slider)
            <tr>
                <td>{{$slider->title}}</td>
                <td>{{$slider->description}}</td>
                <td>
                    @if (Storage::disk('public')->has($slider->image))
                        <img src="{{Storage::URL($slider->image)}}" class="" width="300px" height="100px"/>
                    @endif
                </td>

                <td>
                    <a href="{{route('slider.details',$slider->id)}}"> <span class="label label-info">View</span></a>
                    <a href="{{route('slider.edit',$slider->id)}}"><span class="label label-warning">Edit</span></a>
                    <a href="#"> <span class="label label-danger">Delete</span></a>

                </td>
            </tr>
        @empty
            <tr>
                <td>Sorry no slider have been created please add one</td>

            </tr>
        @endforelse
        </tbody>
    </table>
</div>