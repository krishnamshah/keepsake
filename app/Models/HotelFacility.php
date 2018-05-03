<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelFacility extends Model
{
    //
    protected $table = 'hotel_facilities';
    protected $fillable = [
        'title',
        'description','enable','user_id'
    ];
    public function Hotels(){
        return $this->belongsToMany('App\Models\Hotels')->withTimestamps();
    }
}
