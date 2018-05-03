<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/8/2018
 * Time: 3:02 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    protected $table = 'vehicle';
    protected $fillable = [
        'name', 'description', 'type', 'no_of People', 'gare', 'rate_perday', 'cost_includes_excludes','locations'
    ];

}