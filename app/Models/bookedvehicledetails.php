<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class bookedvehicledetails extends Model
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
    public function bookingVehicle(){
        return $this->belongsTo('App\Models\bookingVehicle','id');
    }


}