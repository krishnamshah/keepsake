<!-- start: Content -->

<div class="form-element">
    <div class="col-md-12 padding-0">
        <form method="post" enctype="multipart/form-data" action="{{route('slider.add')}}">
            @csrf
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="slider_title">
                <span class="bar"></span>
                <label>Slider Title</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="slider_link">
                <span class="bar"></span>
                <label>Slider Link</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <textarea type="text" class="form-text" required name="slider_description"></textarea>
                <span class="bar"></span>
                <label>Descriptions</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" type="file" name="slider_image">
                <span class="bar"></span>
                <label>Slider Image</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="submit btn btn-success" value="Submit" type="submit">
            </div>
        </form>
    </div>
</div>

<!-- end: content -->
