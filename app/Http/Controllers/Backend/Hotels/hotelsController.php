<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/8/2018
 * Time: 12:34 PM
 */

namespace App\Http\Controllers\Backend\Hotels;


use App\Http\Controllers\Controller;
use App\Models\HotelFacility;
use App\Models\HotelRoomFacility;
use App\Models\Hotels;
use App\Models\HotelService;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Image;
use Storage;
use App\Models\HotelGallery;


use Illuminate\Support\Facades\Input;

class hotelsController extends Controller
{

    public function index()
    {
        $booking = '';
        $facilities = HotelFacility::where('enable', 1)->get();
        return view('Backend.Hotels.index', ['booking' => $booking, 'facilities' => $facilities]
        );

    }

    public function list()
    {
        $hotels = Hotels::all();
        $facilities = HotelFacility::where('enable', 1)->get();
        $services = HotelService::where('enable', 1)->get();
        return view('Backend.Hotels.index', ['hotels' => $hotels, 'facilities' => $facilities, 'services' => $services]
        );
    }

    public function createHotel(Request $request)
    {

       $this->validate($request, [
            'hotel_name' => 'required',
            'hotel_province' => '',
            'hotel_district' => '',
            'hotel_city' => '',
            'hotel_street' => '',
            'hotel_house_no' => '',
            'hotel_google_coordinate_latitude' => '',
            'hotel_google_coordinate_longitude' => '',
            'hotel_email' => '',
            'hotel_contact' => '',
            'hotel_website' => '',
            'hotel_contact_person' => '',
            'hotel_hotel_checkIN_time' => '',
            'hotel_hotel_checkOUT_time' => '',
            'hotel_contact_person_contact' => '',
            'hotel_hotel_star_rating' =>'',
            'hotel_rating_agency' =>'',
        ]);

        $hotel = new Hotels();
        $hotel->hotel_name = $request->input('hotel_name');
        $hotel->province = $request->input('hotel_province');
        $hotel->district = $request->input('hotel_district');
        $hotel->city = $request->input('hotel_city');
        $hotel->street = $request->input('hotel_street');
        $hotel->house_no = $request->input('hotel_house_no');
        $hotel->google_coordinate_latitude= $request->input('hotel_google_coordinate_latitude');
        $hotel->google_coordinate_longitude = $request->input('hotel_google_coordinate_longitude');
        $hotel->email = $request->input('hotel_email');
        $hotel->contact= $request->input('hotel_contact');
        $hotel->website = $request->input('hotel_website');
        $hotel->contact_person = $request->input('hotel_contact_person');
        $hotel->hotel_checkIN_time= $request->input('hotel_hotel_checkIN_time');
        $hotel->hotel_checkOUT_time = $request->input('hotel_hotel_checkOUT_time');
        $hotel->contact_person_contact = $request->input('hotel_contact_person_contact ');
        $hotel->hotel_star_rating = $request->input('hotel_hotel_star_rating');
        $hotel->rating_agency = $request->input('hotel_rating_agency');
        if ($request->file('hotel_hotel_logo')) {
            $hotel_hotel_logo = $request->file('hotel_hotel_logo');
            $img = Image::make($hotel_hotel_logo);
            $fileName = 'Hotels' . '/' . date("Y-m-d-H-i-s") . '_Hotels__' . $hotel_hotel_logo->getClientOriginalName();
            $img->fit(1200, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName, $img->stream());
            $hotel->hotel_logo = $fileName;
        }

        $hotel->save();

//        $hotelIoffers=hotels_offers::find($request->input('hotel_offer_id'));

        $hotel->HotelFacility()->sync($request->input('facilities_id'));
        $hotel->HotelService()->sync($request->input('service_id'));
        return redirect()->back()->with(['success' => 'Created Successfully']);
    }

    public function editHotel($id)
    {
        $hotel = Hotels::findorFail($id);
        $facilities = HotelFacility::where('enable', 1)->get();
        $services = HotelService::Where('enable', 1)->get();
        return view('Backend.Hotels.edit', ['hotel' => $hotel, 'facilities' => $facilities, 'services' => $services]);
    }

    public function storeHotel(Request $request)
    {

        $this->validate($request, [
            'hotel_name' => 'required',
            'hotel_province' => '',
            'hotel_district' => '',
            'hotel_city' => '',
            'hotel_street' => '',
            'hotel_house_no' => '',
            'hotel_google_coordinate_latitude' => '',
            'hotel_google_coordinate_longitude' => '',
            'hotel_email' => '',
            'hotel_contact' => '',
            'hotel_website' => '',
            'hotel_contact_person' => '',
            'hotel_hotel_checkIN_time' => '',
            'hotel_hotel_checkOUT_time' => '',
            'hotel_contact_person_contact' => '',
            'hotel_hotel_star_rating' =>'',
            'hotel_rating_agency' =>'',
        ]);

        $hotel = Hotels::findorfail($request->input('hotel_id'));

        $hotel->hotel_name = $request->input('hotel_name');
        $hotel->province = $request->input('hotel_province');
        $hotel->district = $request->input('hotel_district');
        $hotel->city = $request->input('hotel_city');
        $hotel->street = $request->input('hotel_street');
        $hotel->house_no = $request->input('hotel_house_no');
        $hotel->google_coordinate_latitude= $request->input('hotel_google_coordinate_latitude');
        $hotel->google_coordinate_longitude = $request->input('hotel_google_coordinate_longitude');
        $hotel->email = $request->input('hotel_email');
        $hotel->contact= $request->input('hotel_contact');
        $hotel->website = $request->input('hotel_website');
        $hotel->contact_person = $request->input('hotel_contact_person');
        $hotel->hotel_checkIN_time= $request->input('hotel_hotel_checkIN_time');
        $hotel->hotel_checkIN_time = $request->input('hotel_hotel_checkOUT_time');
        $hotel->contact_person_contact = $request->input('hotel_contact_person_contact ');
        $hotel->hotel_star_rating = $request->input('hotel_hotel_star_rating');
        $hotel->rating_agency = $request->input('hotel_rating_agency');
        if ($request->file('hotel_hotel_logo')) {
            $hotel_hotel_logo = $request->file('hotel_hotel_logo');
            $img = Image::make($hotel_hotel_logo);
            $fileName = 'Hotels' . '/' . date("Y-m-d-H-i-s") . '_Hotels__' . $hotel_hotel_logo->getClientOriginalName();
            $img->fit(1200, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });


            Storage::disk('public')->put($fileName, $img->stream());
            $hotel->hotel_logo = $fileName;
        }

        $hotel->save();
        $hotel->HotelFacility()->sync($request->input('facilities_id'));
        $hotel->HotelService()->sync($request->input('service_id'));
        return redirect()->route('hotels.list')->with(['success' => 'Updated Successfully']);
    }


    public function search(Request $request)
    {

        $data['city'] = $request->input('location_city');
        $data['no_of_people'] = $request->input('no_of_people');
        $data['start_date'] = $request->input('start_date');
        $data['end_date'] = $request->input('end_date');

        $search = Hotels::where('city', 'like', '%' . $data['city'] . '%')->get();

        return view('Backend.Hotels.hotelsearchResult', ['search' => $search, 'data' => $data]);
    }

    public function viewDetails($location_city)
    {
        $hotel = Hotels::findorfail($location_city);
        return view('Backend.Hotels.hotelDetails', ['hotel' => $hotel]);
    }


    public function activateHotel($id)
    {
        $hotel = hotels::findorfail($id);
        $user = User::findorfail($hotel->user_id);
        $user->activation_token = null;
        $user->status = 'active';
        $user->update();
        return redirect()->route('hotels.list')->with(['success' => 'Successfully changed']);
    }

    public function deactivateHotel($id)
    {
        $hotel = hotels::findorfail($id);
        $user = User::findorfail($hotel->user_id);
        $user->status = 'disable';
        $user->update();
        return redirect()->route('hotels.list')->with(['success' => 'Successfully changed']);
    }


    public function hotelImageGallery($hotel_id)
    {
        $hotelId = $hotel_id;
        $hotel_name = Hotels::where('id', $hotel_id)->first();
        $hotelImages = HotelGallery::where('hotel_id', $hotel_id)->get();
        return view('Backend.Hotels.ImageGallery', ['hotel_Images' => $hotelImages, 'hotelId' => $hotelId, 'hotel' => $hotel_name]);
    }

    public function hotelAddImageGallery(Request $request)
    {
        $files = $request->file('file');
        if ($request->file('file')) {
            $room_image = $files;
            $img = Image::make($room_image);
            $fileName = 'hotel/hotelGallery' . '/' . date("Y-m-d-H-i-s") . '_hotel_gallery__' . $room_image->getClientOriginalName();
            $img->fit(1200, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName, $img->stream());

        }
        $img->destroy();
        $form = new HotelGallery();
        $form->hotel_id = $request->input('hotel_id');
        $form->image = $fileName;
        $form->save();

//        return response()->json(['success'=>$fileName]);
        return redirect()->back();
    }

    public function hoteldeleteImageGallery($id)
    {

        $image = HotelGallery::WHERE('id', $id)->first();
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