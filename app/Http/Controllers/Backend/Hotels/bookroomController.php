<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\bookingRoom;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class bookroomController extends Controller
{
    public function index()
    {
        $booking = '';
        return view('Backend.Hotels.Rooms.Booking.index', ['booking' => $booking]
        );
    }

    public function list()
    {
        $booking=bookingRoom::all();
        return view('Backend.Hotels.Rooms.Booking.index', ['bookings' => $booking]
        );
    }
    public function createBooking(Request $request){

        $this->validate($request, [
            'booking_room_id' => 'required',
            'booking_booking_status' => '',
            'booking_no_of_people' =>'',
            'booking_start_date' =>'',
            'booking_end_date' =>'',
            'booking_user_id' =>'',
        ]);

        $booking = new bookingRoom();
        $booking->room_id = $request->input('booking_room_id');
        $booking->booking_status = $request->input('booking_booking_status');
        $booking->no_of_people = $request->input('booking_no_of_people');
        $booking->start_date = $request->input('booking_start_date');
        $booking->end_date = $request->input('booking_end_date');
        $booking->user_id = $request->input('booking_user_id');

        $booking->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);
    }
    public function search(Request $request){

//        $search=new bookingRoomSearches();
        $data['booking_id']=$request->input('booking_booking_id');

        $search=bookingRoom::where('id','like','%'.$data['id'].'%')->get();

        return view('Backend.Hotels.Rooms.Booking.bookingsearchResult',['search'=>$search,'data'=>$data]);
    }
    public function edit($id)
    {
        $booking=bookingRoom::findorFail($id);
        return view('Backend.Hotels.Rooms.Booking.edit',['booking' => $booking]);
    }
    public function updatebookings(Request $request,$id)
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
        $room = Rooms::findorfail($id);
        return view('Backend.Hotels.Rooms.Booking.bookingDetails', ['room' => $room]);
    }
}
