<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\bookingVehicle;
use App\Models\Vehicles;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class bookVehicleController extends Controller
{
    public function index()
    {
        $booking = '';
        return view('Backend.Vehicles.Booking.index', ['booking' => $booking]
        );
    }

    public function list()
    {
        $booking=bookingVehicle::all();
        return view('Backend.Vehicles.Booking.index', ['bookings' => $booking]
        );
    }
    public function createBooking(Request $request){

        $this->validate($request, [
            'booking_vehicle_id' => 'required',
            'booking_booking_status' => '',
            'booking_locations'=>'',
            'booking_no_of_people' =>'',
            'booking_start_date' =>'',
            'booking_end_date' =>'',
            'booking_user_id' =>'',
        ]);

        $booking = new bookingVehicle();
        $booking->Vehicle_id = $request->input('booking_vehicle_id');
        $booking->locations = $request->input('booking_locations');
        $booking->booking_status = $request->input('booking_booking_status');
        $booking->no_of_people = $request->input('booking_no_of_people');
        $booking->start_date = $request->input('booking_start_date');
        $booking->end_date = $request->input('booking_end_date');
        $booking->user_id = $request->input('booking_user_id');

        $booking->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);
    }
    public function search(Request $request){

//        $search=new bookingVehiclesearches();
        $data['booking_id']=$request->input('booking_booking_id');

        $search=bookingVehicle::where('id','like','%'.$data['id'].'%')->get();

        return view('Backend.Vehicles.Bookings.bookingsearchResult',['search'=>$search,'data'=>$data]);
    }
    public function edit($id)
    {
        $booking=bookingVehicle::findorFail($id);
        return view('Backend.Vehicles.Bookings.edit',['booking' => $booking]);
    }
    public function updatebookings(Request $request,$id)
    {


        $booking = bookingVehicle::findorfail($id);

        $booking->Vehicle_id = $request->input('booking_vehicle_id');
        $booking->booking_status = $request->input('booking_booking_status');
        $booking->locations= $request->input('booking_locations');
        $booking->no_of_people = $request->input('booking_no_of_people');
        $booking->start_date = $request->input('booking_start_date');
        $booking->end_date = $request->input('booking_end_date');
        $booking->user_id = $request->input('booking_user_id');

        $booking->save();
        return redirect()->route('bookingsVehicle.list')->with(['success' => 'Updated Successfully']);
    }
    public function viewDetails($id)
    {
        $Vehicle = Vehicles::findorfail($id);
        return view('Backend.Vehicles.Bookings.bookingDetails', ['Vehicle' => $Vehicle]);
    }
}
