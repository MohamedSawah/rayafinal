<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable=[
         'title_en', 'title_ar', 'intro_ar', 'intro_en', 'details_en', 'details_ar', 'slug', 'image',
    ];
}
