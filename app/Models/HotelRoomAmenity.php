<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelRoomAmenity extends Model
{
    //
    protected $table = 'hotel_room_amenities';
    protected $fillable = [
        'amenity_name',
        'amenity_description',
        'remarks',
        'enable',
        'user_id'
    ];

    public function Rooms()
    {
        return $this->belongsToMany('App\Models\Rooms')->withTimestamps();
    }
}
