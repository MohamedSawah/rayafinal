<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    //
    Protected $fillable=[
        'title_ar', 'title_en', 'name_ar', 'name_en', 'position_ar', 'position_en', 'image',
    ];
    
}
