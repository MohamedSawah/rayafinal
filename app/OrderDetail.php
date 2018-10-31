<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{


   
    //'order_id', 'product_id', 'price', 'quantity', 'created_at', 'updated_at' FROM 'order_details'
    Protected $fillable=[
        'order_id', 'product_id', 'price', 'quantity',
    ];

    public function product()
  {
    return $this->belongsTo('App\Product');
  }
  public function order()
  {
    return $this->belongsTo('App\Order');
  } 
}
