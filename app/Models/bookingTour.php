<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/8/2018
 * Time: 1:02 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class bookingTour extends Model
{
    protected $table = 'tour_bookings';
    protected $fillable = [
        'tour_id',
        'booking_status',
        'no_of_people',
        'start_date',
        'end_date',
        'booked_by',
        'phone_no',
        'email'
    ];
    public function bookedtourdetails(){
        return $this->hasMany('App\Models\bookedtourdetails','booking_id');
    }


}