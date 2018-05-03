<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelGallery extends Model
{
    protected $table='hotel_gallerys';
    protected $fillable=['hotel_id','image'];
    //
  public function hotel(){
      return $this->belongsTo('App\Models\Hotel');
  }
}
