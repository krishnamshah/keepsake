<?php

namespace App\Http\Controllers\Backend\Hotels;

use App\Models\HotelRoomBedType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class hotelRoomBedTypesController extends Controller
{
    //
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
        $bedtypes = HotelRoomBedType::all();
        return view('Backend.Hotels.Rooms.BedTypes.index', ['bedtypes' => $bedtypes]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    Public function add(Request $request)
    {

        $this->validate($request, [
            'hotel_room_bed_type' => 'required',
            'hotel_room_bed_type_remark' => '',

        ]);
        $hotel_room_bedtype = new HotelRoomBedType();
        $hotel_room_bedtype->bed_type = $request->input('hotel_room_bed_type');
        $hotel_room_bedtype->bed_type_remarks = $request->input('hotel_room_bed_type_remark');


        $hotel_room_bedtype->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);
    }

    public function edit($id)
    {
        $type = HotelRoomBedType::findorFail($id);
        return view('Backend.Hotels.Rooms.bedTypes.edit', ['type' => $type]);
    }

    Public function update(Request $request, $id)
    {
        $this->validate($request, [
            'hotel_room_bed_type' => 'required',
            'hotel_room_bed_type_remark' => '',

        ]);


        $hotel_room_bedtype = HotelRoomBedType::findorFail($id);
        $hotel_room_bedtype->bed_type = $request->input('hotel_room_bed_type');
        $hotel_room_bedtype->bed_type_remarks = $request->input('hotel_room_bed_type_remark');
        $hotel_room_bedtype->save();
        return redirect()->route('hotels.room.bedTypes.list')->with(['success' => 'Created Successfully']);
    }
}
