<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Order;
use App\Product;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

    //     $prodct_today=Product::where('created_at', '>', $date->toDateTimeString() )->get();
     $date_today = Carbon::now()->toDateString();
     $date_weak = Carbon::now()->subDay(7)->toDateString();
     $date_today1 = Carbon::now();
     $date_weak1 = Carbon::now()->subDay(7);
//      //     //$date = Carbon::createFromDate(null, 4, 19)->subDay(7)->toDateString();user_today
//          //    // dd($date);
    $prodct_today=Product::whereRaw('date(created_at) = ?',$date_today)->get();
    $order_today=Order::whereRaw('date(created_at) = ?',$date_today)->get();
    $user_today=User::whereRaw('date(created_at) = ?',$date_today)->get();
    $start=date($date_today1);
    $end=date($date_weak1);
    $prodct_week=Product::whereBetween('created_at', [$end, $start])->get();
    $order_week=Order::whereBetween('created_at', [$end, $start])->get();
    $user_week=User::whereBetween('created_at', [$end, $start])->get();

    // $x=$prodct_today->count();
       // $users=User::latest();
     //dd($prodct_week);
        return view('admin.index',compact('prodct_today','order_today','user_today','prodct_week','order_week','user_week'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
