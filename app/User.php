<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'firstName', 'lastName', 'email', 'password', 'mobile1', 'mobile2', 'landline', 
       'address', 'city1', 'address2', 'city2', 'status','country_id'
    ];

    public function isStatue(){
        return $this->status;
       }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
