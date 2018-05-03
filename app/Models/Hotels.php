<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    protected $table = 'hotels';
    protected $fillable = [
        'hotel_name',
        'province',
        'district',
        'city',
        'street',
        'house_no',
        'hotel_logo',
        'google_coordinate_latitude',
        'google_coordinate_longitude',
        'email',
        'contact',
        'website',
        'hotel_checkIN_time',
        'hotel_checkOUT_time',
        'contact_person_contact',
        'hotel_star_rating',
        'rating_agency',
        'user_id'
    ];

    public function hotel_offers()
    {
        return $this->belongsToMany('App\Models\hotels_offers');
    }

    public function rooms()
    {
        return $this->hasMany('App\Models\rooms', 'hotel_id');
    }

    public function HotelGallery()
    {
        return $this->hasMany('App\Models\HotelGallery');
    }
    public function HotelFacility(){
        return $this->belongsToMany('App\Models\HotelFacility')->withTimestamps();
    }
    public function HotelService(){
        return $this->belongsToMany('App\Models\HotelService')->withTimestamps();
    }

    public function getMin()
    {

    }
}