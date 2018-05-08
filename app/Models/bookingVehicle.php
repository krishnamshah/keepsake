<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bookingVehicle extends Model
{
    protected $table = 'vehicle_booking';
    protected $fillable = [
        'vehicle_id',
        'booking_status',
        'no_of_People',
        'start_date',
        'end_date',
        'booked_by',
        'phone_no',
        'email'
    ];

    public function bookedvehicledetails(){
        return $this->hasMany('App\Models\bookedvehicledetails','booking_id');
    }
}
