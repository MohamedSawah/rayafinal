<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    //
      // `code`, `product_id`, `multiUse`, `status`,
      protected $fillable = [
        'code', 'product_id',
        'multiUse','status',
    ];
    public function product()
    {
        return $this->belongsTo('App\product');
    }
}
