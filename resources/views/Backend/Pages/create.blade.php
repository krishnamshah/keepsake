<!-- start: Content -->

<div class="form-element">
    <div class="col-md-12 padding-0">
        <form method="post" enctype="multipart/form-data" action="{{route('pages.add')}}">
            @csrf
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="page_title">
                <span class="bar"></span>
                <label>Page Title</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <textarea type="text" class="form-text" required name="page_description"></textarea>
                <span class="bar"></span>
                <label>Page Description</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <textarea type="text" class="form-text" required name="page_parent_page"></textarea>
                <span class="bar"></span>
                <label>Parent Page</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="page_slug">
                <span class="bar"></span>
                <label>Page Slug</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="submit btn btn-success" value="Submit" type="submit">
            </div>

        </form>
    </div>
</div>

<!-- end: content -->
