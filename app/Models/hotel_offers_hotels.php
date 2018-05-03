<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hotel_offers_hotels extends Model
{
    //
    protected $table='hotels_hotels_offers';
    protected $fillable=[
        'hotels_offers_id',
        'hotels_id'
    ];
}
