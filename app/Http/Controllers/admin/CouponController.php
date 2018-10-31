<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Coupon;
use App\Product;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coupons=Coupon::latest()->paginate(50);
        return view('admin.coupons.index',compact('coupons'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
 
        $products=Product::all();
        return view('admin.coupons.create', compact('products'));
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //`code`, `product_id`, `multiUse`, `status`,
        request()->validate([
            'code' => 'required',
            'product_id' => 'nullable',
            'multiUse' => 'required',
            'status' => 'required',
        ]);
        $coupon=new coupon;
        // $building->postcode = $request->postcode ;
        $coupon->code=$request->code;
        $coupon->product_id=$request->product_id;
        $coupon->multiUse=$request->multiUse;
        $coupon->status=$request->status;
        $coupon-> save();
        //$coupon->country_id()->sync($request->country_id);
        return redirect()->route('coupons.index')
        ->with('success','coupon Add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        //
        $products=Product::all();
        return view('admin.coupons.edit', compact('coupon','products'));
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        //
        request()->validate([
            'code' => 'required',
            'product_id' => 'nullable',
            'multiUse' => 'required',
            'status' => 'required',
        ]);
        $coupon->update($request->all());
        return redirect()->route('coupons.index')
        ->with('success','coupon Updated successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        //
        $coupon->delete();
        return redirect()->route('coupons.index')
        ->with('success','coupon Deleted successfully');
   
    }
}
