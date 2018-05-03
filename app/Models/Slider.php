<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/26/2018
 * Time: 2:17 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table='slider';
    protected $fillabel=['title',
        'description',
        'link'];

}