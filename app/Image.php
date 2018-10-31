<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //,  'product_id', 'img_name', 'link',
    protected $fillable = [
         'product_id', 'img_name', 'link',
    ];
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
