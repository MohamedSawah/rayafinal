<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $fillable = [
        'name_en', 'name_ar', 'currency_id',
    ];


    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }
   public function Branch()
    {
        return $this->hasMany('App\Branch');
    }
}
