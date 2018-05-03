<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 2/11/2018
 * Time: 2:48 PM
 */

namespace App\Http\Controllers\Frontend\Hotels;

use App\Http\Controllers\Controller;
use Mail;
use App\Mail\Hotel\bookingsuccess;
use App\Models\Hotels;
use App\Models\Rooms;
use App\Models\RoomGuestDetails;
use App\Models\BookingRoom;
use App\Models\HotelSearches;
use App\Models\Slider;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class hotelController extends Controller
{
    public function listhotels()
    {
        $hotel = Hotels::all();

        return view('Frontend.Hotels.List', ['hotel' => $hotel]);
    }

    public function searchhotels(Request $request)
    {

        $this->validate($request, [
            'city' => 'required',
            'start' => '',
            'end' => '',
            'no_of_People' => ''
        ]);


        $hotel = new HotelSearches();
        $hotel->tag = $request->input('city');
        $hotel->start = $request->input('start');
        $hotel->end = $request->input('end');
        $hotel->no_of_people = $request->input('no_of_People');
        $hotel->save();

        $search_id = $hotel->id;

        $data = array('city' => $request->input('city'), 'no_of_People' => $request->input('no_of_People'), 'start' => $request->input('start'), 'end' => $request->input('end'), 'search_id'=>$search_id);
        $request->session()->put('data', $data);

        $search = hotels::where('city', '=', $request->input('city'))->simplePaginate(15);


        return view('Frontend.Hotels.Result', ['search' => $search, 'data' => $data]);
    }

    public function detailhotels(Request $request, $id)
    {
        $hotel = Hotels::findorfail($id);

        return view('Frontend.Hotels.Detail', ['hotel' => $hotel]);
    }


    public function hotelroomlist(Request $request, $id)
    {
        $search_id = $request->session()->get('data.search_id');
        DB::table('hotel_searches')
            ->where('id',$search_id)
            ->update(['hotel_id' => $id]);
        $hotel = Hotels::findorfail($id);
        $data = $request->session()->get('data');
        $data['hotel_id'] = $id;
        $request->session()->put('data', $data);
        $data = $request->session()->get('data');


        $search = Rooms::where(['hotel_id' => $id])->paginate(15);
        return view('Frontend.Hotels.Room.result', [

            'hotel' => $hotel,
            'search' => $search,
            'data' => $data
        ]);
    }

    public function bookingdetailshotelroom(Request $request, $id)
    {
        $search_id = $request->session()->get('data.search_id');
        DB::table('hotel_searches')
            ->where('id',$search_id)
            ->update(['room_id' => $id]);
        $data = $request->session()->get('data');
        $data['room_id'] = $id;

        $request->session()->put('data', $data);
        $room = Rooms::findorfail($id);
        $data = $request->session()->get('data');
        $hotelid = $request->session()->get('data.hotel_id');

        $hotel = Hotels::findorfail($hotelid);


        return view('Frontend.Hotels.Room.bookroom', ['hotel' => $hotel, 'room' => $room, 'data' => $data]);
    }

    public function savebooking(Request $request, $id)
    {

        $data = $request->session()->get('data');
        $hotelid = $request->session()->get('data.hotel_id');
        $no_of_People = $request->session()->get('data.no_of_People');
        $start = $request->session()->get('data.start');
        $end = $request->session()->get('data.end');

        $booking = new BookingRoom();

        $booking->hotel_id = $hotelid;
        $booking->room_id = $id;
        $booking->booking_status = 'booked';
        $booking->no_of_people = $no_of_People;
        $booking->start_date = $start;
        $booking->end_date = $end;
        $booking->booked_by = $request->input('booking_booking_done_by');
        $booking->phone_no = $request->input('booking_phone_no');
        $booking->email = $request->input('booking_email');

        if ($booking->save()) {
            $requestData = collect($request->only(
                'booking_traveller_name',
                'booking_traveller_gender',
                'start',
                'booking_traveller_address',
                'booking_traveller_phone_no'));

            $booking_info = $requestData->transpose()->map(function ($contactData) {

                return new RoomGuestDetails([

                    'name' => $contactData[0],
                    'gender' => $contactData[1],
                    'dob' => $contactData[2],
                    'address' => $contactData[3],
                    'phone_no' => $contactData[4]
                ]);

            });

            $booking->RoomGuestDetails()->saveMany($booking_info);
        }
        $data = $request->session()->get('data');
        $data['booking_id'] = $booking->id;
        $request->session()->put('data', $data);
        $search_id = $request->session()->get('data.search_id');
        DB::table('hotel_searches')
            ->where('id',$search_id)
            ->update(['booking_status' => true]);

        return redirect()->route('room.bookedsuccess');
    }

    public function bookedsuccess(Request $request)
    {


        $data = $request->session()->get('data');
        $hotelid = $request->session()->get('data.hotel_id');
        $searchid = $request->session()->get('data.search_id');
        $bookingid = $request->session()->get('data.booking_id');
        $roomid= $request->session()->get('data.room_id');


       $datas['hotel']= Hotels::findorfail($hotelid);
        $datas['room']= Rooms::findorfail($roomid);
        $datas['search']= HotelSearches::findorfail($searchid);
        $datas['booked_by']= BookingRoom::findorfail($bookingid);
        $datas['guest'] = RoomGuestDetails::where('booking_id','=',$bookingid)->get();


        return view('Frontend.Hotels.Room.bookedpage', ['datas' => $datas]);
    }

    public function sendemail(Request $request,$email)
    {

        $data = $request->session()->get('data');
        $hotelid = $request->session()->get('data.hotel_id');
        $searchid = $request->session()->get('data.search_id');
        $bookingid = $request->session()->get('data.booking_id');
        $roomid= $request->session()->get('data.room_id');


        $datas['hotel']= Hotels::findorfail($hotelid);
        $datas['room']= Rooms::findorfail($roomid);
        $datas['search']= HotelSearches::findorfail($searchid);
        $datas['booked_by']= BookingRoom::findorfail($bookingid);
        $datas['guest'] = RoomGuestDetails::where('booking_id','=',$bookingid)->get();


        Mail::to($email)->send(new bookingsuccess($datas,$data));
        $request->session()->flush();
        return back();
    }


}