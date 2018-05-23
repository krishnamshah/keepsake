<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/8/2018
 * Time: 12:34 PM
 */

namespace App\Http\Controllers\Backend\Tours;


use App\Http\Controllers\Controller;
use App\Models\TourGallery;
use App\Models\Tours;
use App\Models\bookingTour;
use App\Models\TourSearches;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class toursController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $booking = '';
        return view('Backend.Tours.index', ['booking' => $booking]
        );
    }

    public function list()
    {
        $tours=Tours::all();
        return view('Backend.Tours.index', ['tours' => $tours]
        );
    }
    public function createTours(Request $request){

        $this->validate($request, [
            'tour_name' => 'required',
            'tour_description' => '',
            'tour_itineary' =>'',
            'tour_tag' =>'',
            'tour_duration' =>'',
            'tour_price' =>'',
            'tour_group_rate' =>'',
            'tour_bestime' =>'',
            'tour_group_size' =>'',
            'tour_cost_include_excludes'=>'',
            'tour_image' => '',
        ]);

        $tour = new Tours();
        $tour->name = $request->input('tour_name');
        $tour->description = $request->input('tour_description');
        $tour->itinerary = $request->input('tour_itineary');
        $tour->tag = $request->input('tour_tag');
        $tour->duration = $request->input('tour_duration');
        $tour->price = $request->input('tour_price');
        $tour->group_rate = $request->input('tour_group_rate');
        $tour->best_time = $request->input('tour_bestime');
        $tour->group_size = $request->input('tour_group_size');
        $tour->cost_includes_excludes = $request->input('tour_cost_include_excludes');
        if ($request->file('tour_image')) {
            $tour_image=$request->file('tour_image');
            $img = Image::make($tour_image);
            $fileName = 'tours'.'/'.date("Y-m-d-H-i-s") .'_tours__'. $tour_image->getClientOriginalName();
            $img->fit(1200, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName,$img->stream());
            $tour->image=$fileName;
        }

        $tour->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);
    }
    public function search(Request $request)
    {
        $this->validate($request, [
            'tour_tag' => 'required',
            'tour_start' =>'',
            'tour_end' =>'',
            'tour_no_of_People' =>'',
        ]);

        $tour = new TourSearches();
        $tour->tag = $request->input('tour_tag');
        $tour->start = $request->input('tour_start');
        $tour->end = $request->input('tour_end');
        $tour->no_of_People = $request->input('tour_no_of_People');
        $tour->save();

        $search_id= $tour -> id;

        $data=array('tag'=>$request->input('tour_tag'),'no_of_People'=>$request->input('tour_no_of_People'),'start'=>$request->input('tour_start'),'end'=>$request->input('tour_end'),'search_id'=>$search_id);
        $request->session()->put('data',$data);
        $search=Tours::where('tag','like','%'.$data['tag'].'%')->get();

        return view('Backend.Tours.toursearchResult',['search'=>$search,'data'=>$data]);
    }
    public function edit($id)
    {
        $tour=Tours::findorFail($id);
        return view('Backend.Tours.edit',['tour' => $tour]);
    }
    public function updateTours(Request $request,$id)
    {


        $tour = Tours::findorfail($id);
        $tour->name = $request->input('tour_name');
        $tour->description = $request->input('tour_description');
        $tour->itinerary = $request->input('tour_itineary');
        $tour->tag = $request->input('tour_tag');
        $tour->duration = $request->input('tour_duration');
        $tour->price = $request->input('tour_price');
        $tour->group_rate = $request->input('tour_group_rate');
        $tour->best_time = $request->input('tour_bestime');
        $tour->group_size = $request->input('tour_group_size');
        $tour->cost_includes_excludes = $request->input('tour_cost_include_excludes');
        if ($request->file('tour_image')) {
            $tour_image=$request->file('tour_image');
            $img = Image::make($tour_image);
            $fileName = 'tours'.'/'.date("Y-m-d-H-i-s") .'_tours__'. $tour_image->getClientOriginalName();
            $img->fit(1200, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName,$img->stream());
            $tour->image=$fileName;
        }

        $tour->save();
        return redirect()->route('tours.list')->with(['success' => 'Updated Successfully']);
    }
    public function viewDetails($id)
    {
        $tour = Tours::findorfail($id);
        return view('Backend.Tours.tourDetails', ['tour' => $tour]);
    }
    public function activateTour($id)
    {
        $tour = tours::findorfail($id);
        $user = User::findorfail($tour->user_id);
        $user->activation_token = null;
        $user->status = 'active';
        $user->update();
        return redirect()->route('organization')->with(['success' => 'Successfully changed']);
    }

    public function deactivateTour($id)
    {
        $tour = tours::findorfail($id);
        $user = User::findorfail($tour->user_id);
        $user->status = 'disable';
        $user->update();
        return redirect()->route('organization')->with(['success' => 'Successfully changed']);
    }

    public function ImageGallery($tour_id)
    {
        $tourId = $tour_id;
        $tour_name = Tours::where('id', $tour_id)->first();
        $tourImages = TourGallery::where('tour_id', $tour_id)->get();
        return view('Backend.Tours.ImageGallery', ['tour_Images' => $tourImages, 'tourId' => $tourId, 'tour' => $tour_name]);
    }

    public function AddImageGallery(Request $request)
    {
        $files = $request->file('file');
        if ($request->file('file')) {
            $room_image = $files;
            $img = Image::make($room_image);
            $fileName = 'tour/tourGallery' . '/' . date("Y-m-d-H-i-s") . '_tour_gallery__' . $room_image->getClientOriginalName();
            $img->fit(1200, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName, $img->stream());

        }
        $img->destroy();
        $form = new TourGallery();
        $form->tour_id = $request->input('tour_id');
        $form->image = $fileName;
        $form->save();

//        return response()->json(['success'=>$fileName]);
        return redirect()->back();
    }

    public function deleteImageGallery($id)
    {

        $image = TourGallery::WHERE('id', $id)->first();
        if (!(empty($image->image))) {

            if (Storage::disk('public')->exists($image->image)) {

//                unlink($image->image);
                if (Storage::disk('public')->delete($image->image)) {
                    $image->delete();
                }
            }


        }

        return redirect()->back();
    }

}