<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //  'code', 'name_en', 'name_ar', 'info_en', 'info_ar', 'description_en', 'description_ar', 'price', 'price_after', 'otherData', 'quantity', 'img_main', 'slug', 'order', 'status', 'category_id',
    protected $fillable = [
         'code', 'name_en', 'name_ar', 'info_en', 'info_ar', 'description_en', 
         'description_ar', 'price','price_after', 'otherData', 'quantity', 
         'img_main', 'slug', 'order', 'status', 'category_id',
    ];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
   
    public function images()
    {
        return $this->hasMany('App\Image');
    }
    public function coupons()
    {
        return $this->hasMany('App\Coupon');
    }
    
  public function orderdetails()
    {
        return $this->hasMany('App\OrderDetails');
    }
      public function features()
    {
        return $this->belongsToMany('App\Feature');
    }
}
