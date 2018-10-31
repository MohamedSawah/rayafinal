<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
// 'invoiceID', 'user_id', 'quantity', 'total_price', 'shipping_cost', 'paymentMethod', 'paymentToken', 'payment_statue', 'coupon', 'statue',
protected $fillable = [
    'invoiceID', 'user_id', 'quantity', 'total_price',
     'shipping_cost', 'paymentMethod', 'paymentToken', 
     'payment_statue', 'coupon', 'statue',
];
public function user()
{
    return $this->belongsTo('App\User');
}
public function order_details()
{
    return $this->HasMany('App\OrderDetails');
}

}
