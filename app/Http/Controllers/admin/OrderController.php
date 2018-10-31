<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $x=1;
      $order=Order::latest()->paginate(30);
       return view('admin.orders.index',compact('order','x'))
             ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
        $order_details=OrderDetail::where('order_id',$order->id)->get();
        // dd($order_details);
      
         $date = $order->created_at->format('m/d/Y');
        return view('admin.orders.show',compact('order_details','date','order'));
    }

}
