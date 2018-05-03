<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleSearches extends Model
{
    protected $table='vehicle_searches';
    protected $fillable=['vehicle_id','from','to','start','end','no_of_people','booked'];
}
