<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
    //
    protected $table = 'feature_product';
     protected $fillable = ['feature_id','product_id'];

    //    public function feature()
    // {
    //     return $this->belongsTo('App\Feature');
    // } 
    //     public function product()
    // {
    //     return $this->belongsTo('App\product');
    // } 
}
