<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelService extends Model
{
    //
    protected $table='hotel_services';
    protected $fillable=[
        'service_name',
        'service_description',
        'service_hour',
        'service_type',
        'cost',
        'unit',
        'remarks',
        'enable'
    ];
    public function Hotels(){
        return $this->belongsToMany('App\Models\Hotels')->withTimestamps();
    }

}
