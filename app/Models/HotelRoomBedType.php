<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelRoomBedType extends Model
{
    //
    protected $table='hotel_room_bed_type';
    protected $fillable=['bed_type','bed_type_remarks','user_id'];
    //
    public function room(){
        return $this->belongsToMany('App\Models\Rooms')->withTimestamps();
    }
}
