<?php
/**
 * Created by PhpStorm.
 * User: chandra
 * Date: 5/10/18
 * Time: 1:29 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TourGallery extends Model
{
    protected $table='tour_gallerys';
    protected $fillable=['tour_id','image'];
    //
    public function Tours(){
        return $this->belongsTo('App\Models\Tours');
    }


}