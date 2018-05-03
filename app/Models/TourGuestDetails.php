<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/8/2018
 * Time: 1:02 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TourGuestDetails extends Model
{
    protected $table = 'tourtraveller_booked';
    protected $fillable = [
        'booking_id',
        'name',
        'gender',
        'dob',
        'address',
        'phone_no'
    ];
    public function BookingTour(){
        return $this->belongsTo('App\Models\BookingTour','id');
    }


}