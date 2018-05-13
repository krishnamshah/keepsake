<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelRoomFacility extends Model
{
    //
    protected $table = 'hotel_room_types';
    protected $fillable = [
        'title',
        'description'
    ];
    public function Rooms(){
        return $this->hasMany('App\Models\Rooms');
    }
}
