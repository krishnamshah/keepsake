<?php

namespace App\Http\Controllers\Backend\Slider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list=Slider::all();
        return view('Backend.Slider.index',['lists'=>$list]);
    }



    public function create(Request $request)
    {
        $this->validate($request, [

        ]);
        $slider = new Slider();
        $slider->title = $request->input('slider_title');
        $slider->link = $request->input('slider_link');
        $slider->description = $request->input('slider_description');
        $slider->user_id=1;

        if ($request->file('slider_image')) {
            $slider_image=$request->file('slider_image');

            $img = Image::make($slider_image);

            $fileName = 'slider'.'/'.date("Y-m-d-H-i-s") .'_slider_image_'. $slider_image->getClientOriginalName();
            $img->fit(1200, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName,$img->stream());
            $slider->image=$fileName;
        }

        $slider->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);

    }

    public function update($id)
    {

        $slider = Slider::findorfail($id);
        return view('Backend.Slider.edit', ['slider' => $slider]);

    }

    public function saveUpdate(Request $request, $id)
    {
        $slider = Slider::findorfail($id);
        $slider->title = $request->input('slider_title');
        $slider->link = $request->input('slider_link');
        $slider->description = $request->input('slider_description');

        if ($request->file('slider_image')) {
             Storage::disk('public')->delete($slider->image);

            $slider_image=$request->file('slider_image');

            $img = Image::make($slider_image);

            $fileName = 'slider'.'/'.date("Y-m-d-H-i-s") .'_slider_image_'. $slider_image->getClientOriginalName();
            $img->fit(1200, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName,$img->stream());
            $slider->image=$fileName;
        }
        $slider->update();
        return redirect()->route('slider')->with(['success' => 'Successfully changed']);
    }

    public function viewDetails($id)
    {
        $slider = Slider::findorfail($id);
        return view('Backend.Slider.sliderDetails', ['slider' => $slider]);
    }

}
