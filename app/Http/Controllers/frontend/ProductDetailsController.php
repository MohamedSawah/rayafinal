<?php

namespace App\Http\Controllers\frontend;

use App\Product;
use App\Image;
use App\Category;
use App\Currency;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
 

    /**
     * Display the specified resource.
     *@param  int $id 
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $x=1;
        $product=Product::find($id);
        $images=Image::where('product_id',$id)->get();
        $category_id=$product->category_id;
        $related_product=Product::where('category_id',$category_id)->get();
         $currency =Currency::find(2) ;
        
    //    dd($related_product);
        return view('front.productDetails',compact('product','images','x','related_product','currency'));
        
    }
   
   
}
