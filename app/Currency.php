<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    //
    protected $fillable = [
        'name_en', 'name_ar',
    ];
    
    public function country()
    {
        return $this->hasMany('App\Country');
    }
}
