<?php

namespace App\Http\Controllers\Backend\Hotels;

use App\Models\HotelRoomFacility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class hotelsRoomFacilitiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    //
    public function list(){
        $facilities=HotelRoomFacility::all();
        return view('Backend.Hotels.Rooms.Facility.index',['facilities'=>$facilities]);
    }

    Public function add(Request $request){

        $this->validate($request, [
            'hotel_room_facilities_title' => 'required',
            'hotel_room_facilities_description' => ''
        ]);
        $hotel_room_facilities = new HotelRoomFacility();
        $hotel_room_facilities->title = $request->input('hotel_room_facilities_title');
        $hotel_room_facilities->description = $request->input('hotel_room_facilities_description');
        $hotel_room_facilities->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);
    }

    public function activate($id)
    {
        $facility = HotelRoomFacility::findorfail($id);
        $facility->enable = 1;
        $facility->update();
        return redirect()->route('hotels.room.facilities.list')->with(['success' => 'Successfully changed']);
    }

    public function deactivate($id)
    {
        $facility = HotelRoomFacility::findorfail($id);
        $facility->enable = 0;
        $facility->update();
        return redirect()->route('hotels.room.facilities.list')->with(['success' => 'Successfully changed']);
    }
    public function edit($id){
        $facility=HotelRoomFacility::findorFail($id);
        return view('Backend.Hotels.Rooms.Facility.edit',['facility'=>$facility]);
    }
    Public function update(Request $request,$id){

        $this->validate($request, [
            'hotel_room_facilities_title' => 'required',
            'hotel_room_facilities_description' => ''
        ]);
        $hotel_room_facilities = HotelRoomFacility::findorFail($id);
        $hotel_room_facilities->title = $request->input('hotel_room_facilities_title');
        $hotel_room_facilities->description = $request->input('hotel_room_facilities_description');
        $hotel_room_facilities->enable=$request->input('hotel_room_facilities_enable');
        $hotel_room_facilities->save();
        return redirect()->route('hotels.room.facilities.list')->with(['success' => 'Created Successfully']);
    }
}
