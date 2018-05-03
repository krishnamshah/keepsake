<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingVehicle extends Model
{
    protected $table = 'vehicle_booking';
    protected $fillable = [
        'vehicle_id',
        'booking_status',
        'no_of_People',
        'location',
        'drop_location',
        'start_date',
        'end_date',
        'booked_by',
        'phone_no',
        'email'
    ];

    public function VehicleGuestDetails(){
        return $this->hasMany('App\Models\vehicleGuestDetails','booking_id');
    }
}
