<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/3/2018
 * Time: 1:46 PM
 */

namespace App\Http\Controllers\Backend\Flights\Domestic;



use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\DomesticFlightSearches;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class domesticController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $booking = '';
        $ticketIssues = '';
        $ticketCancled = '';
        return view('Backend.Flights.Domestics.index', ['booking' => $booking, 'ticketIssues' => $ticketIssues, 'ticketCancled' => $ticketCancled]
        );
    }

    /**
     * @param Request $request
     */
    public function search(Request $request){
       $search=new DomesticFlightSearches();
        $search->search_date=Carbon::now();
        $search->departure_date=$request->input('depature_date');
        $search-> departure_from=$request->input('depature_from');
        $search->return_date=$request->input('arival_date');
        $search->arival_at=$request->input('arival_at');
        $search->trip_type=$request->input('trip_type');
        $search->adults=!empty($request->input('adult'))?trim($request->input('adult')):1;
        $search->children=!empty($request->input('child'))?trim($request->input('child')):0;
//        $search->user_id=Auth::user('id');
        //$search->search_results='';
        $search->save();
        Session::forget('passenger_search');
        Session::push('passenger_search',$search);
        return view('Backend.Flights.Domestics.flightSearchResult',['search'=>$search]);
    }
    public function bookflight(Request $request){

    }
}