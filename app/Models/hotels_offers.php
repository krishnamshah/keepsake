<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/28/2018
 * Time: 5:27 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class hotels_offers extends Model
{
    protected $table = 'hotels_offers';
    protected $fillable = [
        'offername',
        'description',
        'offer_start_date',
        'offer_end_date'
    ];

    public function hotels()
    {
        return $this->belongsToMany('App\Models\Hotels');
    }
}