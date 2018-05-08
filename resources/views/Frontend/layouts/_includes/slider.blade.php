<!-- TOP AREA -->
<div class="top-area show-onload">
    <div class="owl-carousel owl-slider owl-carousel-area" id="owl-carousel-slider">
        @foreach($slider as $slide)
        <div class="bg-holder full text-center text-white">
            <div class="bg-mask"></div>
            <div class="bg-img" style="
            background-image:url('{{Storage::url($slide->image) }}')"></div>
            <div class="bg-front full-center">
                <div class="owl-cap">
                    <h1 class="owl-cap-title fittext">{{$slide->title}}</h1>
                    <div class="owl-cap-price">{!! $slide->description !!}
                    </div><a class="btn btn-white btn-ghost" href="{{$slide->link}}"><i class="fa fa-angle-right"></i> Explore</a>
                </div>
            </div>
        </div>
       @endforeach
    </div>
</div>
<!-- END TOP AREA  -->
