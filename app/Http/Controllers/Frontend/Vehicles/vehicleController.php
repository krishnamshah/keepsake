<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 2/11/2018
 * Time: 2:48 PM
 */

namespace App\Http\Controllers\Frontend\Vehicles;

use App\Http\Controllers\Controller;
use Mail;
use App\Mail\Vehicle\bookingsuccess;
use App\Models\Vehicles;
use App\Models\BookingVehicle;
use App\Models\VehicleGuestDetails;
use App\Models\VehicleSearches;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class vehicleController extends Controller
{
    public function listvehicles()
    {
        $vehicle = Vehicles::all();

        return view('Frontend.Vehicles.List', ['vehicle' => $vehicle]);
    }
    public function resultvehicles()
    {
        return view('Frontend.Vehicles.Result');
    }
    public function searchvehicles(Request $request)
    {
        $this->validate($request, [
            'from' => 'required',
            'to' =>'',
            'start' => '',
            'end' => '',
            'no_of_People' => ''
        ]);


        $vehicle = new VehicleSearches();
        $vehicle->from = $request->input('from');
        $vehicle->to = $request->input('to');
        $vehicle->start = $request->input('start');
        $vehicle->end = $request->input('end');
        $vehicle->no_of_people = $request->input('no_of_People');
        $vehicle->save();

        $search_id = $vehicle->id;
        $data=array('from'=>$request->input('from'),'to'=>$request->input('to'),'no_of_People'=>$request->input('no_of_People'),'start'=>$request->input('start'),'end'=>$request->input('end'), 'search_id'=>$search_id);
        $request->session()->put('data',$data);
        $search=Vehicles::where('locations','like','%'.$data['from'].'%')->simplePaginate(15);


        return view('Frontend.Vehicles.Result',['search'=>$search,'data'=>$data]);
    }

    public function searchvehicle(Request $request)
    {
        $this->validate($request, [
            'from' => 'required',
            'to' =>'',
            'id'=>'',
            'start' => '',
            'end' => '',
            'no_of_People' => ''
        ]);


        $vehicle = new VehicleSearches();

        $vehicle->from = $request->input('from');
        $vehicle->to = $request->input('to');
        $vehicle->start = $request->input('start');
        $vehicle->end = $request->input('end');
        $vehicle->no_of_people = $request->input('no_of_People');
        $vehicle->save();

        $search_id = $vehicle->id;
        $data=array('from'=>$request->input('from'),'to'=>$request->input('to'),'no_of_People'=>$request->input('no_of_People'),'start'=>$request->input('start'),'end'=>$request->input('end'), 'search_id'=>$search_id);
        $request->session()->put('data',$data);
        $search=Vehicles::where('id','=',$data['id'])->simplePaginate(15);


        return view('Frontend.Vehicles.Result',['search'=>$search,'data'=>$data]);
    }

    public function detailvehicles($id)
    {
        $vehicle=Vehicles::findorfail($id);
        $vehicles = Vehicles::findorfail($id);
        return view('Frontend.Vehicles.Detail',['vehicle'=>$vehicle,'vehicles'=>$vehicles]);
    }

    public function bookingdetailsvehicle(Request $request,$id)
    {
        $search_id = $request->session()->get('data.search_id');
        DB::table('vehicle_searches')
            ->where('id',$search_id)
            ->update(['vehicle_id' => $id]);
        $data= $request->session()->get('data');
        $data['vehicle_id']= $id;

        $request->session()->put('data', $data);
        $data=$request->session()->get('data');

        $vehicle = Vehicles::findorfail($id);
        return view('Frontend.Vehicles.Book.book',[ 'vehicle' => $vehicle,'data'=> $data]);
    }

    public function savebooking(Request $request,$id)
    {

        $data=$request->session()->get('data');
        $vehicleid=$request->session()->get('data.vehicle_id');
        $from=$request->session()->get('data.from');
        $to=$request->session()->get('data.to');
        $no_of_People=$request->session()->get('data.no_of_People');
        $start=$request->session()->get('data.start');
        $end=$request->session()->get('data.end');

        $booking = new BookingVehicle();

        $booking -> vehicle_id = $vehicleid;
        $booking -> booking_status = 'booked';
        $booking -> location=$from;
        $booking -> drop_location=$to;
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
                return new VehicleGuestDetails([

                    'name'=>$contactData[0],
                    'gender'=>$contactData[1],
                    'dob'=>$contactData[2],
                    'address'=>$contactData[3],
                    'phone_no'=>$contactData[4]


                ]);

            });
            $booking->VehicleGuestDetails()->saveMany($booking_info);
        }
        $data= $request->session()->get('data');
        $data['booking_id']= $booking->id;
        $request->session()->put('data', $data);

        $search_id = $request->session()->get('data.search_id');
        DB::table('vehicle_searches')
            ->where('id',$search_id)
            ->update(['booking_status' => true]);

        return redirect()->route('vehicle.bookedsuccess');
    }

    public function bookedsuccess(Request $request)
    {


        $data = $request->session()->get('data');
        $vehicleid = $request->session()->get('data.vehicle_id');
        $searchid = $request->session()->get('data.search_id');
        $bookingid = $request->session()->get('data.booking_id');


        $datas['vehicle']= Vehicles::findorfail($vehicleid);
        $datas['search']= VehicleSearches::findorfail($searchid);
        $datas['booked_by']= BookingVehicle::findorfail($bookingid);
        $datas['guest'] = VehicleGuestDetails::where('booking_id','=',$bookingid)->get();

        return view('Frontend.Vehicles.Book.bookedpage', ['datas' => $datas]);
    }

    public function sendemail(Request $request,$email)
    {

        $data = $request->session()->get('data');
        $vehicleid = $request->session()->get('data.vehicle_id');
        $searchid = $request->session()->get('data.search_id');
        $bookingid = $request->session()->get('data.booking_id');


        $datas['vehicle']= Vehicles::findorfail($vehicleid);
        $datas['search']= VehicleSearches::findorfail($searchid);
        $datas['booked_by']= BookingVehicle::findorfail($bookingid);
        $datas['guest'] = VehicleGuestDetails::where('booking_id','=',$bookingid)->get();

        Mail::to($email)->send(new bookingsuccess($datas,$data));
        return back();
    }

}