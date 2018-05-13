<?php

namespace App;

use App\Notifications\VerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;


class User extends Authenticatable
{

    use Notifiable;
    use LaratrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'activation_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function SendVerification()
    {
        $this->notify(new VerifyEmail($this));
    }

    public function verified()
    {
        return $this->activation_token === null;
    }

    public function Agents(){
        return $this->hasMany('App\Models\Agents');
    }

    public function Customers(){
        return $this->hasMany('App\Models\Customers');
    }

}
