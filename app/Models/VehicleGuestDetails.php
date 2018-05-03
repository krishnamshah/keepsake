<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class VehicleGuestDetails extends Model
{
    protected $table = 'vehicletraveller_booked';
    protected $fillable = [
        'booking_id',
        'name',
        'gender',
        'dob',
        'address',
        'phone_no'
    ];
    public function BookingVehicle(){
        return $this->belongsTo('App\Models\BookingVehicle','id');
    }


}