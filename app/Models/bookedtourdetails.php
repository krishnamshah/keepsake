<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/8/2018
 * Time: 1:02 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class bookedtourdetails extends Model
{
    use SoftDeletes;

    protected $table = 'tourtraveller_booked';
    protected $fillable = [
        'booking_id',
        'name',
        'gender',
        'dob',
        'address',
        'phone_no'
    ];
    protected $dates = ['deleted_at'];

    public function bookingTour(){
        return $this->belongsTo('App\Models\bookingTour','id');
    }


}