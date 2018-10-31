<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrderDetail;
use Auth;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    //order 'invoiceID', 'user_id', 'quantity', 'total_price', 'shipping_cost', 'paymentMethod', 'paymentToken', 'payment_statue', 'coupon', 'statue',

    public function order_store(){
        $total_quality=0;
       foreach(Cart::content() as $row){
        $product=Product::find($row->id);
        $total_quality=$total_quality+$row->qty;
       } 
       if(Auth::guest())
       return redirect('login');
       else {
          //get last record
                //   $record = Order::latest()->first();
                  $record = Order::find(DB::table('orders')->max('id'));
                  $current_time = Carbon::now()->toDateTimeString();
                  if($record != null){
                  $nextInvoiceNumber=($record->id + 1).'_'.$current_time;
                   }
                   else {
                      $nextInvoiceNumber=1 .'_'.$current_time;
                   }
                //   dd($nextInvoiceNumber );

           $order_create=Order::create([
             'user_id' => Auth::user()->id,
             'quantity' => $total_quality,
             'total_price' => Cart::subtotal(),
             'invoiceID'=>$nextInvoiceNumber,
             'shipping_cost' => '50',
             'paymentMethod' => '0',
             'paymentToken'  => '0',
             'payment_statue'=> '0',
             'coupon'=>'0',
           ]);
            // orderdetails  'order_id', 'product_id', 'price', 'quantity', 'created_at', 'updated_at' FROM 'order_details'
        
         foreach(Cart::content() as $row){
         $product=Product::find($row->id);
         OrderDetail::create([
            'order_id'=>$order_create->id,
            'product_id'=> $product->id,
            'price'=> $row->price,
            'quantity'=> $row->qty,
          ]);
           }
        Cart::destroy();
        return redirect(route('home')); 

       }
      return  redirect()->route('home');
    
    }
}
