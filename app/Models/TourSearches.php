<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourSearches extends Model
{
    protected $table='tour_searches';
    protected $fillable=['tour_id','tag','start','end','no_of_people','booked'];
}
