<?php

namespace App\Http\Controllers\Backend\Tours;

use App\Http\Controllers\Controller;
use App\Models\BookingTour;
use App\Models\TourGuestDetails;
use App\Models\TourSearches;
use App\Models\Tours;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class bookingtoursController extends Controller
{
    public function index()
    {
        $booking = '';
        return view('Backend.Tours.Booking.index', ['booking' => $booking]
        );
    }

    public function list()
    {
        $booking = bookingTour::all();
        return view('Backend.Tours.Bookings.index', ['bookings' => $booking]
        );
    }

    public function createBooking(Request $request,$id)
    {
        $search_id = $request->session()->get('data.search_id');
        DB::table('tour_searches')
            ->where('id',$search_id)
            ->update(['tour_id' => $id]);
        $data= $request->session()->get('data');
        $data['tour_id']= $id;
        $request->session()->put('data', $data);
        $data=$request->session()->get('data');

        $tour = Tours::findorfail($id);
        return view('Backend.Tours.Bookings.create', ['tour' => $tour,'data'=> $data]);
    }

    public function saveBooking(Request $request)
    {
        $data=$request->session()->get('data');
        $tourid=$request->session()->get('data.tour_id');
//        $tag=$request->session()->get('data.tag');
        $no_of_People=$request->session()->get('data.no_of_People');
        $start=$request->session()->get('data.start');
        $end=$request->session()->get('data.end');
        $booking = new BookingTour();
        $booking->tour_id = $tourid;
        $booking->booking_status = 'booked';
        $booking->no_of_People = $no_of_People;
        $booking->start_date= $start;
        $booking->end_date = $end;
        $booking->booked_by = $request->input('bookingTour_booking_done_by');
        $booking->phone_no = $request->input('bookingTour_phone_no');
        $booking->email = $request->input('bookingTour_email');

        if($booking->save())
        {
            $requestData = collect($request->only('bookingTour_traveller_name','bookingTour_traveller_gender', 'bookingTour_traveller_dob', 'bookingTour_traveller_address','bookingTour_traveller_phone_no'));

            $booking_info = $requestData->transpose()->map(function ($contactData) {
                return new TourGuestDetails([

                    'name'=>$contactData[0],
                    'gender'=>$contactData[1],
                    'dob'=>$contactData[2],
                    'phone_no'=>$contactData[4],
                    'address'=>$contactData[3],


                ]);
            });
            $booking->TourGuestDetails()->saveMany($booking_info);
        }
        $data= $request->session()->get('data');
        $data['booking_id']= $booking->id;
        $request->session()->put('data', $data);

        $search_id = $request->session()->get('data.search_id');
        DB::table('tour_searches')
            ->where('id',$search_id)
            ->update(['booking_status' => true]);

        return redirect()->route('bookingsTour.list');

    }

    public function search(Request $request)
    {


        $data['booking_id'] = $request->input('booking_booking_id');

        $search = BookingTour::where('id', 'like', '%' . $data['id'] . '%')->get();

        return view('Backend.Tours.Bookings.bookingsearchResult', ['search' => $search, 'data' => $data]);
    }

    public function edit($id)
    {
        $booking = BookingTour::findorFail($id);
        return view('Backend.Tours.Bookings.edit', ['booking' => $booking]);
    }

    public function updatebookings(Request $request, $id)
    {


        $booking = BookingTour::findorfail($id);

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
//        $details=bookedtourdetails::findorfail($id);
        $booking = BookingTour::findorfail($id);
//        $details = TourGuestDetails::findorfail($id);
        return view('Backend.Tours.Bookings.bookingtourDetails', ['booking' => $booking]);
    }
}
