<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/8/2018
 * Time: 1:02 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class BookingRoom extends Model
{
    protected $table = 'hotel_room_bookings';
    protected $fillable = [
        'hotel_id',
        'room_id',
        'booking_status',
        'no_of_people',
        'start_date',
        'end_date',
        'booked_by',
        'phone_no',
        'email'
    ];
    public function RoomGuestDetails(){
        return $this->hasMany('App\Models\RoomGuestDetails','booking_id');
    }


}