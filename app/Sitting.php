<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sitting extends Model
{
    //
    protected $fillable=[ 
        'phone', 'mobile2', 'mobile', 'email', 'supportEmail', 
        'facebook', 'instagram', 'twitter', 'youtube', 'linkedin', 'worktime'
    ];
}
