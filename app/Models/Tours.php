<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/8/2018
 * Time: 1:02 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    protected $table = 'tour_package';
    protected $fillable = [
        'name',
        'description',
        'itineary',
        'location',
        'duration',
        'image',
        'price',
        'best_time',
        'group_size'
    ];


}