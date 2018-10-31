<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $fillable=[
        'title_ar', 'title_en', 'name_ar', 'name_en', 
        'details_en', 'details_ar', 'slug', 'image',
       ];
}
