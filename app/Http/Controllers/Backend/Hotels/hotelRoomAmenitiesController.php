<?php

namespace App\Http\Controllers\Backend\Hotels;

use App\Http\Controllers\Controller;
use App\Models\HotelRoomAmenity;

use Illuminate\Http\Request;

class hotelRoomAmenitiesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    //

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list()
    {
        $amenities = HotelRoomAmenity::all();
        return view('Backend.Hotels.Rooms.Amenity.index', ['amenities' => $amenities]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    Public function add(Request $request)
    {

        $this->validate($request, [
            'hotel_room_amenities_title' => 'required',
            'hotel_room_amenities_description' => '',
            'hotel_room_amenities_remark' => '',
        ]);
        $hotel_amenity = new HotelRoomAmenity();
        $hotel_amenity->amenity_name = $request->input('hotel_room_amenities_title');
        $hotel_amenity->amenity_description = $request->input('hotel_room_amenities_description');
        $hotel_amenity->remarks = $request->input('hotel_room_amenities_remark');

        $hotel_amenity->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);
    }

    public function activate($id)
    {
        $service = HotelRoomAmenity::findorfail($id);
        $service->enable = 1;
        $service->update();
        return redirect()->route('hotels.room.amenities.list')->with(['success' => 'Successfully changed']);
    }

    public function deactivate($id)
    {
        $service = HotelRoomAmenity::findorfail($id);
        $service->enable = 0;
        $service->update();
        return redirect()->route('hotels.room.amenities.list')->with(['success' => 'Successfully changed']);
    }

    public function edit($id)
    {
        $amenity = HotelRoomAmenity::findorFail($id);
        return view('Backend.Hotels.Rooms.Amenity.edit', ['amenity' => $amenity]);
    }

    Public function update(Request $request, $id)
    {
        $this->validate($request, [
            'hotel_room_amenities_title' => 'required',
            'hotel_room_amenities_description' => '',
            'hotel_room_amenities_remark' => '',
        ]);
        $hotel_amenity = HotelRoomAmenity::findorFail($id);
        $hotel_amenity->amenity_name = $request->input('hotel_room_amenities_title');
        $hotel_amenity->amenity_description = $request->input('hotel_room_amenities_description');
        $hotel_amenity->remarks = $request->input('hotel_room_amenities_remark');
        $hotel_amenity->enable = $request->input('hotel_room_amenities_enable');
        $hotel_amenity->save();
        return redirect()->route('hotels.room.amenities.list')->with(['success' => 'Created Successfully']);
    }
}
