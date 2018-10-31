<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    //  'name_en', 'name_ar', 'details_en', 'details_ar', 'parent_id', 'order', 'status',
    protected $fillable = [
         'name_en', 'name_ar', 'details_en', 'details_ar', 'parent_id', 'order', 'status',
    ];

    public function subcategories()
    {
        return $this->hasMany('App\Category');
    }
    public function subcategory()
    {
        return $this->belongsTo('App\Category');
    }  
    public function products()
    {
        return $this->hasMany('App\Product');
    }

}
