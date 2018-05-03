<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/29/2018
 * Time: 8:02 AM
 */

namespace App\Http\Controllers\Backend\Hotel_Offers;


use App\Http\Controllers\Controller;
use App\Models\hotels_offers;
use App\Models\Hotels;
use Illuminate\Http\Request;

class hotelOffersController extends Controller
{
    public function index()
    {
        $hotel_offers = hotels_offers::all();
        return view('Backend.Hotel-Offers.index', ['hotel_offers' => $hotel_offers]);

    }

    Public function createHotelOffer(Request $request)
    {
        $hotel_offers = New hotels_offers();
        $hotel_offers->offername = $request->input('hotel_offer_title');
        $hotel_offers->description = $request->input('hotel_offer_description');
        $hotel_offers->offer_start_date = $request->input('hotel_offer_start_date');
        $hotel_offers->offer_end_date = $request->input('hotel_offer_end_date');
        $hotel_offers->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);
    }
    public function addHotelsInOffers($id){
        $offers=hotels_offers::findOrfail($id);
        $hotels=Hotels::all();
        return view('Backend.Hotel-Offers.addHotels_InHotels_Offer',['offer'=>$offers,'hotels'=>$hotels]);
    }
    public function saveaddHotelsInOffers(Request $request){
        //dd($request);
//        $hotelIoffers=new hotel_offers();
        $hotelIoffers=hotels_offers::find($request->input('hotel_offer_id'));

        $hotelIoffers->hotels()->sync($request->input('hotel_id'));
        return redirect()->route('HotelOffers.list');
    }

    public function viewDetails(){

    }
    public function editOffer($id){
        $offers=hotels_offers::findOrfail($id);

        return view('Backend.Hotel-Offers.edit',['offer'=>$offers]);
    }
    public function editHotelsInOffer($id){
        $offers=hotels_offers::with('hotels')->findOrfail($id);
        $hotels=Hotels::all();
        return view('Backend.Hotel-Offers.editHotels_InHotels_Offer',['offer'=>$offers,'hotels'=>$hotels]);
    }

    public function updateHotelsInHotelOffers(Request $request){
        $hotelIoffers=hotels_offers::find($request->input('hotel_offer_id'));

        $hotelIoffers->hotels()->sync($request->input('hotel_id'));
        return redirect()->route('HotelOffers.list');
    }
    Public function updateHotelOffers(Request $request)
    {
        $hotel_offers = hotels_offers::findorfail($request->input('hotel_offer_id'));
        $hotel_offers->offername = $request->input('hotel_offer_title');
        $hotel_offers->description = $request->input('hotel_offer_description');
        $hotel_offers->offer_start_date = $request->input('hotel_offer_start_date');
        $hotel_offers->offer_end_date = $request->input('hotel_offer_end_date');
        $hotel_offers->update();
        return redirect()->route('HotelOffers.list')->with(['success' => 'Update Successfully']);
    }

}