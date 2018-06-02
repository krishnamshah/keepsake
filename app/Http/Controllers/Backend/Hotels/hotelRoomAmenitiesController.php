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
    public function list()
    {
        $aminity = HotelRoomAmenity::all();
        return view('Backend.Hotels.Rooms.Service.index', ['aminity' => $aminity]);
    }

    Public function add(Request $request)
    {

        $this->validate($request, [
            'hotel_amenity_name' => 'required',
            'hotel_service_hour' => '',
            'hotel_service_type' => '',
            'hotel_service_cost' => '',
            'hotel_service_cost_unit' => '',
            'hotel_service_description' => '',
            'hotel_service_remark' => '',
        ]);
        $hotel_services = new HotelRoomAmenity();
        $hotel_services->service_name = $request->input('hotel_service_name');
        $hotel_services->service_description = $request->input('hotel_service_description');
        $hotel_services->service_hour = $request->input('hotel_service_hour');
        $hotel_services->service_type = $request->input('hotel_service_type');
        $hotel_services->cost = $request->input('hotel_service_cost');
        $hotel_services->unit = $request->input('hotel_service_cost_unit');
        $hotel_services->remarks = $request->input('hotel_service_remark');
        $hotel_services->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);
    }

    public function activate($id)
    {
        $service = HotelRoomAmenity::findorfail($id);
        $service->enable = 1;
        $service->update();
        return redirect()->route('hotels.room.services.list')->with(['success' => 'Successfully changed']);
    }

    public function deactivate($id)
    {
        $service = HotelRoomAmenity::findorfail($id);
        $service->enable = 0;
        $service->update();
        return redirect()->route('hotels.room.services.list')->with(['success' => 'Successfully changed']);
    }

    public function edit($id)
    {
        $service = HotelRoomAmenity::findorFail($id);
        return view('Backend.Hotels.Rooms.Service.edit', ['service' => $service]);
    }

    Public function update(Request $request, $id)
    {
        $this->validate($request, [
            'hotel_service_name' => 'required',
            'hotel_service_hour' => '',
            'hotel_service_type' => '',
            'hotel_service_cost' => '',
            'hotel_service_cost_unit' => '',
            'hotel_service_description' => '',
            'hotel_service_remark' => '',
        ]);
        $hotel_services = HotelRoomAmenity::findorFail($id);
        $hotel_services->service_name = $request->input('hotel_service_name');
        $hotel_services->service_description = $request->input('hotel_service_description');
        $hotel_services->service_hour = $request->input('hotel_service_hour');
        $hotel_services->service_type = $request->input('hotel_service_type');
        $hotel_services->cost = $request->input('hotel_service_cost');
        $hotel_services->unit = $request->input('hotel_service_cost_unit');
        $hotel_services->remarks = $request->input('hotel_service_remark');
        $hotel_services->enable = $request->input('hotel_service_enable');
        $hotel_services->save();
        return redirect()->route('hotels.room.services.list')->with(['success' => 'Created Successfully']);
    }
}
