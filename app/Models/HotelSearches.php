<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelSearches extends Model
{
    protected $table='hotel_searches';
    protected $fillable=['hotel_id','room_id','tag','start','end','no_of_people','booked'];
}
