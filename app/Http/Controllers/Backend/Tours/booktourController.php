<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\bookingTour;
use App\Models\Tours;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class booktourController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $booking = '';
        return view('Backend.Tours.Booking.index', ['booking' => $booking]
        );
    }

    public function list()
    {
        $booking=bookingTour::all();
        return view('Backend.Tours.Booking.index', ['bookings' => $booking]
        );
    }
    public function createBooking(Request $request){

        $this->validate($request, [
            'booking_tour_id' => 'required',
            'booking_booking_status' => '',
            'booking_no_of_people' =>'',
            'booking_start_date' =>'',
            'booking_end_date' =>'',
            'booking_user_id' =>'',
        ]);

        $booking = new bookingTour();
        $booking->tour_id = $request->input('booking_tour_id');
        $booking->booking_status = $request->input('booking_booking_status');
        $booking->no_of_people = $request->input('booking_no_of_people');
        $booking->start_date = $request->input('booking_start_date');
        $booking->end_date = $request->input('booking_end_date');
        $booking->user_id = $request->input('booking_user_id');

        $booking->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);
    }
    public function search(Request $request){

//        $search=new bookingTourSearches();
        $data['booking_id']=$request->input('booking_booking_id');

        $search=bookingTour::where('id','like','%'.$data['id'].'%')->get();

        return view('Backend.Tours.Bookings.bookingsearchResult',['search'=>$search,'data'=>$data]);
    }
    public function edit($id)
    {
        $booking=bookingTour::findorFail($id);
        return view('Backend.Tours.Bookings.edit',['booking' => $booking]);
    }
    public function updatebookings(Request $request,$id)
    {


        $booking = bookingTour::findorfail($id);

        $booking->tour_id = $request->input('booking_tour_id');
        $booking->booking_status = $request->input('booking_booking_status');
        $booking->no_of_people = $request->input('booking_no_of_people');
        $booking->start_date = $request->input('booking_start_date');
        $booking->end_date = $request->input('booking_end_date');
        $booking->user_id = $request->input('booking_user_id');

        $booking->save();
        return redirect()->route('bookingsTour.list')->with(['success' => 'Updated Successfully']);
    }
    public function viewDetails($id)
    {
        $tour = Tours::findorfail($id);
        return view('Backend.Tours.Bookings.bookingDetails', ['tour' => $tour]);
    }
}
