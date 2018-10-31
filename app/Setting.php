<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $fillable=[ 
        'phone', 'mobile2', 'mobile', 'email', 'supportEmail', 
        'facebook', 'instagram', 'twitter', 'youtube', 'linkedin', 'worktime','address_ar','address_en'
    ];
}
