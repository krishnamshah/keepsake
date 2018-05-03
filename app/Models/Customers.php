<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 2/28/2018
 * Time: 12:19 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }
    protected $table='individuals';
    protected $fillable=['name','id_no','id_type','issued_by','country','city','resident_no','cell','email','image','id_doc'];
    public function users(){
        return $this->belongsTo('App\Model\user');
    }

}