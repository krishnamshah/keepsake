<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/8/2018
 * Time: 1:02 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class RoomGuestDetails extends Model
{
    protected $table = 'hotel_room_booked_guest_details';
    protected $fillable = [
        'booking_id',
        'name',
        'gender',
        'dob',
        'address',
        'phone_no'
    ];
    public function bookingRoom(){
        return $this->belongsTo('App\Models\BookingRoom','id');
    }


}