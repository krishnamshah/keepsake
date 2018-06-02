<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 2/28/2018
 * Time: 11:38 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agents extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'pan_no', 'pan_holder_name', 'website', 'country', ',city', 'office_no', 'fax', 'company_email', 'name_of_person', 'postion_of_person', 'contact_person_pho', 'contact_person_email'];

    protected $dates = ['deleted_at'];
    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }

}