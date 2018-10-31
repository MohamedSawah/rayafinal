<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    //
    protected $fillable = [
         'title_en', 'title_ar', 'img', 'link', 'status','intro_ar','intro_en','details_ar','details_en',
    ];
}
