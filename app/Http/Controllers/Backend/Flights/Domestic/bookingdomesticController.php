<?php


namespace App\Http\Controllers\Backend\Flights\Domestic;



use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\DomesticFlightSearches;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class bookingdomesticController extends Controller
{
    public function index()
    {
        $booking = '';
        return view('Backend.Domestics.Booking.index', ['booking' => $booking]
        );
    }

    public function list()
    {
        $booking=bookingDomestic::all();
        return view('Backend.Domestics.Booking.index', ['bookings' => $booking]
        );
    }
    public function createBooking(Request $request){

        $this->validate($request, [
            'booking_domestic_id' => 'required',
            'booking_booking_status' => '',
            'booking_no_of_people' =>'',
            'booking_from' =>'',
            'booking_to' =>'',
            'booking_date' =>'',
            'booking_user_id' =>'',
        ]);

        $booking = new bookingDomestic();
        $booking->domestic_id = $request->input('booking_domestic_id');
        $booking->booking_status = $request->input('booking_booking_status');
        $booking->no_of_people = $request->input('booking_no_of_people');
        $booking->from = $request->input('booking_from');
        $booking->to = $request->input('booking_to');
        $booking->date = $request->input('booking_date');
        $booking->user_id = $request->input('booking_user_id');

        $booking->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);
    }
    public function search(Request $request){

//        $search=new bookingDomesticSearches();
        $data['booking_id']=$request->input('booking_booking_id');

        $search=bookingDomestic::where('id','like','%'.$data['id'].'%')->get();

        return view('Backend.Domestics.Booking.bookingsearchResult',['search'=>$search,'data'=>$data]);
    }
    public function edit($id)
    {
        $booking=bookingDomestic::findorFail($id);
        return view('Backend.Domestics.Booking.edit',['booking' => $booking]);
    }
    public function updatebookings(Request $request,$id)
    {
        $booking = bookingDomestic::findorfail($id);

        $booking->domestic_id = $request->input('booking_domestic_id');
        $booking->booking_status = $request->input('booking_booking_status');
        $booking->no_of_people = $request->input('booking_no_of_people');
        $booking->from = $request->input('booking_from');
        $booking->to = $request->input('booking_to');
        $booking->date = $request->input('booking_date');
        $booking->user_id = $request->input('booking_user_id');

        $booking->save();
        return redirect()->route('bookingsDomestic.list')->with(['success' => 'Updated Successfully']);
    }
    public function viewDetails($id)
    {
        $domestic = Domestics::findorfail($id);
        return view('Backend.Domestics.Booking.bookingDetails', ['domestic' => $domestic]);
    }
}
