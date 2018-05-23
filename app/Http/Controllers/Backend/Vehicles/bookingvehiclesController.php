<?php

namespace App\Http\Controllers\Backend\Vehicles;

use App\Http\Controllers\Controller;
use App\Models\bookingVehicle;
use App\Models\TourGuestDetails;
use App\Models\bookedvehicledetails;
use App\Models\Vehicles;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class bookingVehiclesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $booking = '';
        return view('Backend.Vehicles.Bookings.index', ['booking' => $booking]
        );
    }

    public function list()
    {
        $booking=bookingVehicle::all();
        $bookings=TourGuestDetails::all();

        return view('Backend.Vehicles.Bookings.index', ['booking' => $booking,'bookings' => $bookings]
        );
    }
    public function createBooking($vehicle_id, $locations, $no_of_People,$start_date,$end_date)
    {

        return view('Backend.Vehicles.Bookings.create', [
            'vehicle_id' => $vehicle_id,
            'locations' => $locations,
            'no_of_People' => $no_of_People,
            'start_date' => $start_date,
            'end_date' => $end_date
        ]);
    }

    public function saveBooking(Request $request)
    {

        $booking = new bookingVehicle();
        $booking->vehicle_id = $request->input('booking_vehicle_id');
        $booking->locations= $request->input('booking_locations');
        $booking->booking_status = 'booked';
        $booking->type='car';
        $booking->no_of_People = $request->input('booking_vehicle_no_of_People');
        $booking->start_date='start_date';
        $booking->end_date='end_date';
        $booking->booking_done_by = $request->input('bookingVehicle_booking_done_by');
        $booking->phone_no = $request->input('bookingVehicle_phone_no');
        $booking->email = $request->input('bookingVehicle_email');

        if($booking->save())
        {
            $requestData = collect($request->only('bookingVehicle_traveller_name','bookingVehicle_traveller_gender', 'bookingVehicle_traveller_dob', 'bookingVehicle_traveller_address','bookingVehicle_traveller_phone_no'));

            $booking_info = $requestData->transpose()->map(function ($contactData) {
                return new bookedvehicledetails([

                    'name'=>$contactData[0],
                    'gender'=>$contactData[1],
                    'dob'=>$contactData[2],
                    'address'=>$contactData[3],
                    'phone_no'=>$contactData[4],

                ]);
            });
            $booking->bookedvehicledetails()->saveMany($booking_info);
        }

        return redirect()->route('bookingsVehicle.list');

    }

    public function search(Request $request)
    {


        $data['booking_id'] = $request->input('booking_booking_id');

        $search = bookingVehicle::where('id', 'like', '%' . $data['id'] . '%')->get();

        return view('Backend.Vehicles.Bookings.bookingsearchResult', ['search' => $search, 'data' => $data]);
    }

    public function edit($id)
    {
        $booking = bookingVehicle::findorFail($id);
        return view('Backend.Vehicle.Bookings.edit', ['booking' => $booking]);
    }

    public function updatebookings(Request $request, $id)
    {


        $booking = bookingVehicle::findorfail($id);

        $booking->vehicle_id = $request->input('booking_vehicle_id');
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
//        $details=bookedvehicledetails::findorfail($id);
        $booking = bookingVehicle::findorfail($id);
//        $details = bookedvehicledetails::findorfail($id);
        return view('Backend.Vehicle.Bookings.bookingvehicleDetails', ['booking' => $booking]);
    }
}
