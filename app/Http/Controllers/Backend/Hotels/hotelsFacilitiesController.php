<?php

namespace App\Http\Controllers\Backend\Hotels;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HotelFacility;
class hotelsFacilitiesController extends Controller
{
    //
    public function list(){
        $facilities=HotelFacility::all();
        return view('Backend.Hotels.Facility.index',['facilities'=>$facilities]);
    }

    Public function add(Request $request){
        $this->validate($request, [
            'hotel_facilities_title' => 'required',
            'hotel_facilities_description' => ''
        ]);
        $hotel_facilities = new HotelFacility();
        $hotel_facilities->title = $request->input('hotel_facilities_title');
        $hotel_facilities->description = $request->input('hotel_facilities_description');
        $hotel_facilities->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);
    }

    public function activate($id)
    {
        $facility = HotelFacility::findorfail($id);
        $facility->enable = 1;
        $facility->update();
        return redirect()->route('hotels.facilities.list')->with(['success' => 'Successfully changed']);
    }

    public function deactivate($id)
    {
        $facility = HotelFacility::findorfail($id);
        $facility->enable = 0;
        $facility->update();
        return redirect()->route('hotels.facilities.list')->with(['success' => 'Successfully changed']);
    }
    public function edit($id){
        $facility=HotelFacility::findorFail($id);
        return view('Backend.Hotels.Facility.edit',['facility'=>$facility]);
    }
    Public function update(Request $request,$id){
        $this->validate($request, [
            'hotel_facilities_title' => 'required',
            'hotel_facilities_description' => ''
        ]);
        $hotel_facilities = HotelFacility::findorFail($id);
        $hotel_facilities->title = $request->input('hotel_facilities_title');
        $hotel_facilities->description = $request->input('hotel_facilities_description');
        $hotel_facilities->save();
        return redirect()->route('hotels.facilities.list')->with(['success' => 'Created Successfully']);
    }
}
