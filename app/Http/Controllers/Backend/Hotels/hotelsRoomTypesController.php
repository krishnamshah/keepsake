<?php

namespace App\Http\Controllers\Backend\Hotels;

use App\Models\HotelRoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class hotelsRoomTypesController extends Controller
{
    //
    public function list(){
        $roomTypes=HotelRoomType::all();
        return view('Backend.Hotels.Rooms.RoomTypes.index',['roomTypes'=>$roomTypes]);
    }

    Public function add(Request $request){
        $this->validate($request, [
            'hotel_room_types_title' => 'required',
            'hotel_room_types_description' => ''
        ]);
        $hotel_room_types = new HotelRoomType();
        $hotel_room_types->room_type = $request->input('hotel_room_types_title');
        $hotel_room_types->description = $request->input('hotel_room_types_description');
        $hotel_room_types->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);
    }


    public function edit($id){
        $roomType=HotelRoomType::findorFail($id);
        return view('Backend.Hotels.Rooms.RoomTypes.edit',['roomType'=>$roomType]);
    }
    Public function update(Request $request,$id){
        $this->validate($request, [
            'hotel_room_types_title' => 'required',
            'hotel_room_types_description' => ''
        ]);
        $hotel_room_types = HotelRoomType::findorFail($id);
        $hotel_room_types->room_type = $request->input('hotel_room_types_title');
        $hotel_room_types->description = $request->input('hotel_room_types_description');
        $hotel_room_types->update();
        return redirect()->route('hotels.room.types.list')->with(['success' => 'Created Successfully']);
    }
}
