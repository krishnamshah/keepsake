<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 2/11/2018
 * Time: 2:48 PM
 */

namespace App\Http\Controllers\Frontend\Tours;

use App\Http\Controllers\Controller;
use Mail;
use App\Mail\Tour\bookingsuccess;
use App\Models\Tours;
use App\Models\BookingTour;
use App\Models\TourGuestDetails;
use App\Models\TourSearches;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class tourController extends Controller
{
    public function listtours()
    {
        $tour = Tours::all();

        return view('Frontend.Tours.List', ['tour' => $tour]);
    }
    public function resulttours()
    {

        return view('Frontend.Tours.Result');
    }
    public function searchtours(Request $request)
    {
        $this->validate($request, [
        'tag' => 'required',
        'start' =>'',
        'end' =>'',
        'no_of_People' =>'',
        ]);

        $tour = new TourSearches();
        $tour->tag = $request->input('tag');
        $tour->start = $request->input('start');
        $tour->end = $request->input('end');
        $tour->no_of_people = $request->input('no_of_People');
        $tour->save();

        $search_id= $tour -> id;

        $data=array('tag'=>$request->input('tag'),'no_of_People'=>$request->input('no_of_People'),'start'=>$request->input('start'),'end'=>$request->input('end'),'search_id'=>$search_id);
        $request->session()->put('data',$data);

        $search=Tours::where('tag', 'like','%'.$request->input('tag').'%')->simplePaginate(15);


        return view('Frontend.Tours.Result',['search'=>$search,'data'=>$data]);
    }
    public function searchtour(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'start' =>'',
            'end' =>'',
            'no_of_People' =>'',
        ]);

        $tour = new TourSearches();
        $tour->id = $request->input('tour');
        $tour->start = $request->input('start');
        $tour->end = $request->input('end');
        $tour->no_of_people = $request->input('no_of_People');
        $tour->save();

        $search_id= $tour -> id;

        $data=array('tag'=>$request->input('tag'),'no_of_People'=>$request->input('no_of_People'),'start'=>$request->input('start'),'end'=>$request->input('end'),'search_id'=>$search_id);
        $request->session()->put('data',$data);

        $search=Tours::where('tour_id', '=',$request->input('tour_id'));


        return view('Frontend.Tours.Result',['search'=>$search,'data'=>$data]);
    }

    public function detailtours($id)
    {
        $tours = Tours::all();

        $tour = Tours::findorfail($id);
        return view('Frontend.Tours.Detail',['tour'=>$tour,'tours'=>$tours]);
    }

    public function bookingdetailstour(Request $request,$id)
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
        return view('Frontend.Tours.Book.book',[ 'tour' => $tour,'data'=> $data]);
    }

    public function savebooking(Request $request,$id)
    {

        $data=$request->session()->get('data');
        $tourid=$request->session()->get('data.tour_id');
        $no_of_People=$request->session()->get('data.no_of_People');
        $start=$request->session()->get('data.start');
        $end=$request->session()->get('data.end');

        $booking = new BookingTour();

        $booking -> tour_id = $tourid;
        $booking -> booking_status = 'booked';
        $booking -> no_of_people = $no_of_People;
        $booking -> start_date = $start;
        $booking -> end_date = $end;
        $booking -> booked_by = $request->input('booking_booking_done_by');
        $booking -> phone_no = $request->input('booking_phone_no');
        $booking -> email = $request->input('booking_email');

        if($booking->save())
        {
            $requestData = collect($request->only(
                'booking_traveller_name',
                'booking_traveller_gender',
                'start',
                'booking_traveller_address',
                'booking_traveller_phone_no'));

            $booking_info = $requestData->transpose()->map(function ($contactData) {
                return new TourGuestDetails([

                    'name'=>$contactData[0],
                    'gender'=>$contactData[1],
                    'dob'=>$contactData[2],
                    'address'=>$contactData[3],
                    'phone_no'=>$contactData[4]


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
        return redirect()->route('tour.bookedsuccess');
    }

    public function bookedsuccess(Request $request)
    {


        $data = $request->session()->get('data');
        $tourid = $request->session()->get('data.tour_id');
        $searchid = $request->session()->get('data.search_id');
        $bookingid = $request->session()->get('data.booking_id');


        $datas['tour']= Tours::findorfail($tourid);
        $datas['search']= TourSearches::findorfail($searchid);
        $datas['booked_by']= BookingTour::findorfail($bookingid);
        $datas['guest'] = TourGuestDetails::where('booking_id','=',$bookingid)->get();

        return view('Frontend.Tours.Book.bookedpage', ['datas' => $datas]);
    }

    public function sendemail(Request $request,$email)
    {

        $data = $request->session()->get('data');
        $tourid = $request->session()->get('data.tour_id');
        $searchid = $request->session()->get('data.search_id');
        $bookingid = $request->session()->get('data.booking_id');


        $datas['tour']= Tours::findorfail($tourid);
        $datas['search']= TourSearches::findorfail($searchid);
        $datas['booked_by']= BookingTour::findorfail($bookingid);
        $datas['guest'] = TourGuestDetails::where('booking_id','=',$bookingid)->get();

        Mail::to($email)->send(new bookingsuccess($datas,$data));
        $request->session()->flush();


        return back();
    }

}