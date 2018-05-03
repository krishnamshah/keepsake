<?php

namespace App\Http\Controllers\Backend\Hotels;

use App\Http\Controllers\Controller;
use App\Models\bookingRoom;
use App\Models\roomGuestDetails;
use App\Models\Rooms;
use App\Models\Hotels;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class bookingroomsController extends Controller
{
    public function index()
    {
        $booking = '';
        return view('Backend.Hotels.Rooms.Booking.index', ['booking' => $booking]
        );
    }

    public function list()
    {
        $booking = bookingRoom::all();
        return view('Backend.Hotels.Rooms.Bookings.index', ['bookings' => $booking]
        );
    }

    public function createBooking($id, $location_city, $start_date, $end_date, $no_of_people)
    {

        return view('Backend.Hotels.Rooms.Bookings.create', [
            'id' => $id,
            'location_city' => $location_city,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'no_of_people' => $no_of_people
        ]);
    }

    public function saveBooking(Request $request)
    {

        $booking = new bookingRoom();
        $booking->room_id = $request->input('booking_room_id');
        $booking->booking_status = 'booked';
        $booking->no_of_people = $request->input('booking_room_no_of_people');
        $booking->start_date = $request->input('booking_room_start_date');
        $booking->end_date = $request->input('booking_room_end_date');
        $booking->booking_done_by = $request->input('bookingRoom_booking_done_by');
        $booking->phone_no = $request->input('bookingRoom_phone_no');
        $booking->email = $request->input('bookingRoom_email');

        if($booking->save())
        {
            $requestData = collect($request->only('bookingRoom_traveller_name','bookingRoom_traveller_gender', 'bookingRoom_traveller_dob', 'bookingRoom_traveller_address','bookingRoom_traveller_phone_no'));

            $booking_info = $requestData->transpose()->map(function ($contactData) {
                return new roomGuestDetails([

                    'name'=>$contactData[0],
                    'gender'=>$contactData[1],
                    'dob'=>$contactData[2],
                    'address'=>$contactData[3],
                    'phone_no'=>$contactData[4],

                ]);
            });
            $booking->bookedroomdetails()->saveMany($booking_info);
        }

        return redirect()->route('bookingsRoom.list');

    }

    public function search(Request $request)
    {


        $data['booking_id'] = $request->input('booking_booking_id');

        $search = roomGuestDetails::where('id', 'like', '%' . $data['id'] . '%')->get();

        return view('Backend.Hotels.Rooms.Bookings.bookingsearchResult', ['search' => $search, 'data' => $data]);
    }

    public function edit($id)
    {
        $booking = roomGuestDetails::findorFail($id);
        return view('Backend.Hotels.Rooms.Bookings.edit', ['booking' => $booking]);
    }

    public function updatebookings(Request $request, $id)
    {


        $booking = bookingRoom::findorfail($id);

        $booking->room_id = $request->input('booking_room_id');
        $booking->booking_status = $request->input('booking_booking_status');
        $booking->no_of_people = $request->input('booking_no_of_people');
        $booking->start_date = $request->input('booking_start_date');
        $booking->end_date = $request->input('booking_end_date');
        $booking->user_id = $request->input('booking_user_id');

        $booking->save();
        return redirect()->route('bookingsRoom.list')->with(['success' => 'Updated Successfully']);
    }

    public function viewDetails($id)
    {
        $booking = bookingRoom::findorfail($id);
        return view('Backend.Hotels.Rooms.Bookings.bookingroomDetails', ['booking' => $booking]);
    }
}
