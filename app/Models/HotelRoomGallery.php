<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelRoomGallery extends Model
{
    protected $table='hotel_room_gallerys';
    protected $fillable=['hotel_room_id','image'];
    //
    public function hotel(){
        return $this->belongsTo('App\Models\Hotel');
    }
}
