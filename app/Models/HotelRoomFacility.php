<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelRoomFacility extends Model
{
    //
    protected $table = 'hotel_rooms_facilites';
    protected $fillable = [
        'title',
        'description'
    ];
    public function Rooms(){
        return $this->belongsToMany('App\Models\Rooms')->withTimestamps();
    }
}
