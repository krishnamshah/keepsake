<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/8/2018
 * Time: 12:34 PM
 */

namespace App\Http\Controllers\Backend\Hotels;

use App\Http\Controllers\Controller;
use App\Models\HotelRoomService;
use App\Models\HotelRoomType;
use App\Models\Hotels;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class roomsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexRoom()
    {
        $booking = '';
        return view('Backend.Hotels.Rooms.index', ['booking' => $booking]
        );
    }

    public function listRoom()
    {
        $rooms = Rooms::all();
        $hotels = Hotels::all();
        $roomTypes = HotelRoomType::all();
        $roomService = HotelRoomService::where('enable', 1)->get();
        return view('Backend.Hotels.Rooms.index', [
                'rooms' => $rooms,
                'roomService' => $roomService,
                'hotels' => $hotels,
                'roomTypes' => $roomTypes
            ]
        );
    }

    public function searchlistRoom($id, $city, $start_date, $end_date, $no_of_people)
    {

        $rooms = Rooms::all();
//        return view('Backend.Hotels.Rooms.searchindex', ['rooms' => $rooms]);
        return view('Backend.Hotels.Rooms.searchindex', [
            'rooms' => $rooms,
            'id' => $id,
            'city' => $city,
            'no_of_people' => $no_of_people,
            'start_date' => $start_date,
            'end_date' => $end_date
        ]);
    }


    public function createRoom(Request $request)
    {

        $this->validate($request, [
            'room_hotel_id' => 'required',
            'room_hotel_room_type_id' => '',
            'room_name' => '',
            'room_no_of_people' => '',
            'room_max_extra_bed_up' => '',
            'room_room_cost' => '',
            'room_cost_per_extra_bed' => '',
            'room_no_of_rooms' => '',
        ]);

        $room = new Rooms();
        $room->hotel_id = $request->input('room_hotel_id');
        $room->hotel_room_type_id = $request->input('room_hotel_room_type_id');
        $room->name = $request->input('room_name');
        $room->no_of_people = $request->input('room_no_of_people');
        $room->max_extra_bed_up = $request->input('room_max_extra_bed_up');
        $room->room_cost = $request->input('room_room_cost');
        $room->cost_per_extra_bed = $request->input('room_cost_per_extra_bed');
        $room->no_of_rooms = $request->input('room_no_of_rooms');

        $room->save();
        $room->HotelRoomService()->sync($request->input('services_id'));

        return redirect()->back()->with(['success' => 'Created Successfully']);
    }

    public function editRoom($id)
    {
        $room = Rooms::findorFail($id);
        $hotels = Hotels::all();
        $roomTypes = HotelRoomType::all();

        $roomService = HotelRoomService::where('enable', 1)->get();

        return view('Backend.Hotels.Rooms.edit',
            ['room' => $room,

                'roomService' => $roomService,
                'hotels' => $hotels,
                'roomTypes' => $roomTypes
            ]);
    }

    public function storeRoom(Request $request)
    {

        $room = Rooms::findorfail($request->input('room_id'));
        $room->hotel_id = $request->input('room_hotel_id');
        $room->hotel_room_type_id = $request->input('room_hotel_room_type_id');
        $room->name = $request->input('room_name');
        $room->no_of_people = $request->input('room_no_of_people');
        $room->max_extra_bed_up = $request->input('room_max_extra_bed_upto');
        $room->room_cost = $request->input('room_room_cost');
        $room->cost_per_extra_bed = $request->input('room_cost_per_extra_bed');
        $room->no_of_rooms = $request->input('room_no_of_rooms');

        $room->update();

        $room->HotelRoomService()->sync($request->input('services_id'));
        $room->HotelRoomAmenity()->sync($request->input('amenity_id'));

        return redirect()->route('rooms.details', $room->id)->with(['success' => 'Updated Successfully']);
    }

    public function viewRoomDetails($id)
    {
        $room = Rooms::findorfail($id);
        return view('Backend.Hotels.Rooms.roomDetails', ['room' => $room]);
    }


    public function searchRoom(Request $request)
    {

        $data['location_city'] = $request->input('location_city');
        $data['no_of_people'] = $request->input('no_of_people');
        $data['start_date'] = $request->input('start_date');
        $data['end_date'] = $request->input('end_date');

        $search = Hotels::where('location_city', 'like', '%' . $data['location_city'] . '%')->get();

        return view('Backend.Hotels.Rooms.roomsearchResult', ['search' => $search, 'data' => $data]);
    }

    public function activateRoom($id)
    {
        $room = Rooms::findorfail($id);
        $user = User::findorfail($room->user_id);
        $user->activation_token = null;
        $user->status = 'active';
        $user->update();
        return redirect()->route('rooms.list')->with(['success' => 'Successfully changed']);
    }

    public function deactivateRoom($id)
    {
        $room = Rooms::findorfail($id);
        $user = User::findorfail($room->user_id);
        $user->status = 'disable';
        $user->update();
        return redirect()->route('rooms.list')->with(['success' => 'Successfully changed']);
    }

    public function roomImageGallery($hotel_id)
    {
        $hotelId = $hotel_id;
        $hotel_name = Rooms::where('id', $hotel_id)->first();
        $hotelImages = HotelRoomGallery::where('hotel_id', $hotel_id)->get();
        return view('Backend.Hotels.ImageGallery', ['hotel_Images' => $hotelImages, 'hotelId' => $hotelId, 'hotel' => $hotel_name]);
    }

    public function roomAddImageGallery(Request $request)
    {
        $files = $request->file('file');
        if ($request->file('file')) {
            $room_image = $files;
            $img = Image::make($room_image);
            $fileName = 'hotel/room/hotelGallery' . '/' . date("Y-m-d-H-i-s") . '_hotel_gallery__' . $room_image->getClientOriginalName();
            $img->fit(1200, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName, $img->stream());

        }
        $img->destroy();
        $form = new HotelRoomGallery();
        $form->hotel_id = $request->input('hotel_id');
        $form->image = $fileName;
        $form->save();

        return redirect()->back();
    }

    public function roomdeleteImageGallery($id)
    {

        $image = HotelRoomGallery::WHERE('id', $id)->first();
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