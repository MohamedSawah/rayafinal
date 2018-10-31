<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    //
    protected $table = 'news_letter';
    
    protected $fillable = [
        'email', 'mobile',
    ];

}
