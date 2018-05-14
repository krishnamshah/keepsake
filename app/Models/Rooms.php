<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = 'hotel_rooms';
    protected $fillable = [
        'hotel_id',
        'hotel_room_type_id',
        'name',
        'no_of_people',
        'max_extra_bed_up',
        'room_cost',
        'cost_per_extra_bed',
        'no_of_rooms',
    ];

    public function hotels()
    {
        return $this->belongsTo('App\Models\hotels', 'hotel_id','id');
    }

    public function roomTypes()
    {
        return $this->belongsTo('App\Models\HotelRoomType','hotel_room_type_id','id');
    }

    public function HotelRoomFacility()
    {
        return $this->belongsToMany('App\Models\HotelRoomFacility')->withTimestamps();
    }

    public function HotelRoomService()
    {
        return $this->belongsToMany('App\Models\HotelRoomService')->withTimestamps();
    }
}