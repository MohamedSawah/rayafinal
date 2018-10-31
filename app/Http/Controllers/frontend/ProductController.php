<?php

namespace App\Http\Controllers\frontend;

use App\Category;
use App\Currency;
use App\Http\Controllers\Controller;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::latest()->paginate(12);
        $categories = Category::all();
        $currency = Currency::find(2);
        return view('front.products', compact('products', 'categories', 'currency'));
    }

    //adding to shopping cart
    public function addToCart(Request $request)
    {

        Cart::add($request->id, $request->name, $request->quantity, $request->price);

        return back();

    }

    //Remove from shopping cart
    public function removeFromCart(Request $request)
    {

        if ($request->ajax() && isset($request->productId)) {
            Cart::remove($request->productId);
        }

        return response()->json(['success' => 'Data is successfully added', 200]);

    }

    public function cart()
    {
        return view('front.cart');
    }

    public function show_by_category($id)
    {
        //
        $x = 1;
        $products = Product::where('category_id', $id)->paginate(12);
        $categories = Category::all();
        $currency = Currency::find(2);

        return view('front.products', compact('products', 'categories', 'currency'));

    }

    public function searchcat(Request $request)
    {

        $categories = Category::all();
        $currency = Currency::find(2);
        if ($request->ajax() && isset($request->categories)) {
        //if ($request->ajax() && (isset($request->categories)||(isset($request->price1)||isset($request->price2)))) {

            $categoriesId = $request->categories;

            //var_dump($categories) ; die ;
            
            $arrayCatId =  array();
            foreach($categoriesId as $cat){
              array_push($arrayCatId,$cat);
            }
           
            
            $products = Product::whereIn('category_id', $arrayCatId)->get();
          //price filter
          if(isset($product->price1)||isset($request->price2)){
            $products= $products->where('price','>',$request->price1)>where('price','<',$request->price2);   
           }  
            $html= '';
            foreach ($products as $product) {
 
                   $html .=  '<div class="col-md-6 col-lg-4 col-sm-6">
                    <div class="single-shop mb-40">
                        <div class="shop-img">'.
                            '<a href="#"><img src="'.asset("upload/product/".$product->img_main). '" alt=""></a>'.
                             '<div class="price-up-down">
                               
                                <span class="sale-new">sale</span> 

                            </div>'.
                           
                           ' <div class="button-group">
                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick-view'.$product->id.'">'.
                                    '<i class="pe-7s-cart"></i>'.
                               ' </a>
                                <a class="wishlist" href="#" title="Wishlist" data-toggle="modal" data-target="#quick-view">
                                    <!-- <i class="pe-7s-like"></i> -->
                                </a>'.
                                '<a href="#" data-toggle="modal" data-target="#quick-view'.$product->id .'" title="Quick View'.$product->id .'">'.
                                    '<i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>'.
                        '<div class="shop-text-all">
                            <div class="title-color fix">
                                <div class="shop-title f-left">
                                    <h3><a href="'. route("product_details.show",$product->id).'">'.$product->name_en.'</a></h3>
                                </div>'.
                                '<div class="price f-right">'.
                                    '<span class="new">'.$product->price.' '.$currency->name_en .'</span>' 

                               .'</div>
                            </div>
                        </div>
                    </div>
                </div></div>'   ;


            }
            return $html;
        } 
         if ($request->ajax() && !(isset($request->categories))) {
            //  dd($products);  
            $products=Product::latest()->paginate(50);
            $html= '';
            foreach ($products as $product) {
 
                   $html .=  '<div class="col-md-6 col-lg-4 col-sm-6">
                    <div class="single-shop mb-40">
                        <div class="shop-img">'.
                            '<a href="#"><img src="'.asset("upload/product/".$product->img_main). '" alt=""></a>'.
                             '<div class="price-up-down">
                               
                                <span class="sale-new">sale</span> 

                            </div>'.
                           
                           ' <div class="button-group">
                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick-view'.$product->id.'">'.
                                    '<i class="pe-7s-cart"></i>'.
                               ' </a>
                                <a class="wishlist" href="#" title="Wishlist" data-toggle="modal" data-target="#quick-view">
                                    <!-- <i class="pe-7s-like"></i> -->
                                </a>'.
                                '<a href="#" data-toggle="modal" data-target="#quick-view'.$product->id .'" title="Quick View'.$product->id .'">'.
                                    '<i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>'.
                        '<div class="shop-text-all">
                            <div class="title-color fix">
                                <div class="shop-title f-left">
                                    <h3><a href="'. route("product_details.show",$product->id).'">'.$product->name_en.'</a></h3>
                                </div>'.
                                '<div class="price f-right">'.
                                    '<span class="new">'.$product->price.' '.$currency->name_en .'</span>' 

                               .'</div>
                            </div>
                        </div>
                    </div>
                </div></div>'   ;


            }
            return $html;
         }

        if($request->ajax() && isset($request->price )) {

          $request->price ;
          return  str_split($request->price, 0);



        }

        
        
    }
   public function searchcat2(Request $request)
    {

        $categories = Category::all();
        $currency = Currency::find(2);
        if ($request->ajax() && isset($request->categories)) {

            $categoriesId = $request->categories;

            //var_dump($categories) ; die ;
            
            $arrayCatId =  array();
            foreach($categoriesId as $cat){
              array_push($arrayCatId,$cat);
            }
           
            
            $products = Product::whereIn('category_id', $arrayCatId)->get();
            //price filter
          if(isset($product->price1)||isset($request->price2)){
            $products= $products->where('price','>',$request->price1)>where('price','<',$request->price2);   
           } 
            $html= '';
            foreach ($products as $product) {
 
                   $html .=  '<div class="single-shop mb-30">
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="shop-list-left">
                                                                <div class="shop-img">'.
                                                                    '<a href="#"><img src="'.asset('upload/product/'.$product->img_main). '" alt=""> </a>'.
                                                                    '<div class="shop-quick-view">
                                                                        <a href="#" data-toggle="modal" data-target="#quick-view'.$product->id.'" title="Quick View">
                                                                            
                                                                        </a>
                                                                    </div>
                                                                    <div class="price-up-down">
                                                                        <span class="sale-new">New</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                                            <div class="shop-list-right">
                                                                <div class="shop-list-all">
                                                                    <div class="shop-list-name">
                                                                        <h3><a href="'. route("product_details.show",$product->id).'">'.$product->name_en.'</a></h3>
                                                                    </div>
                                                                    <div class="shop-list-rating">
                                                                        <span class="ratting">
                                                                                <!-- <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i> -->
                                                                            </span>
                                                                    </div>
                                                                    <p>
                                                                        '.$product->info_en.'
                                                                    </p>
                                                                    <div class="shop-list-price">
                                                                        <span class="list-price">'
                                                                        .'<span class="new">'.$product->price.' '.$currency->name_en .'</span>'.'</div>
                                                                        <div class="shop-list-cart">
                                                                          <div class="shop-group">
                                                                            <a href="#" title="Add to Cart">
                                                                                <i class="pe-7s-cart"></i> add to cart
                                                                            </a>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  ';


            }
            return $html;
        } 
         if ($request->ajax() && !(isset($request->categories))) {
            //  dd($products);  
            $products=Product::latest()->paginate(50);
            $html= '';
            foreach ($products as $product) {
 
                   $html .=  '<div class="single-shop mb-30">
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="shop-list-left">
                                                                <div class="shop-img">'.
                                                                    '<a href="#"><img src="'.asset('upload/product/'.$product->img_main). '" alt=""> </a>'.
                                                                    '<div class="shop-quick-view">
                                                                        <a href="#" data-toggle="modal" data-target="#quick-view'.$product->id.'" title="Quick View">
                                                                            
                                                                        </a>
                                                                    </div>
                                                                    <div class="price-up-down">
                                                                        <span class="sale-new">New</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                                            <div class="shop-list-right">
                                                                <div class="shop-list-all">
                                                                    <div class="shop-list-name">
                                                                        <h3><a href="'. route("product_details.show",$product->id).'">'.$product->name_en.'</a></h3>
                                                                    </div>
                                                                    <div class="shop-list-rating">
                                                                        <span class="ratting">
                                                                                <!-- <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i> -->
                                                                            </span>
                                                                    </div>
                                                                    <p>
                                                                        '.$product->info_en.'
                                                                    </p>
                                                                    <div class="shop-list-price">
                                                                        <span class="list-price">'
                                                                        .'<span class="new">'.$product->price.' '.$currency->name_en .'</span>'.'</div>
                                                                        <div class="shop-list-cart">
                                                                          <div class="shop-group">
                                                                            <a href="#" title="Add to Cart">
                                                                                <i class="pe-7s-cart"></i> add to cart
                                                                            </a>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  '   ;


            }
            return $html;
         }

        if($request->ajax() && isset($request->price )) {

          $request->price ;
          return  str_split($request->price, 0);



        }

        
        
    }

    public Function search(Request $request){
    $q = $request->search;
    $products = Product::where('name_en','LIKE','%'.$q.'%')->orWhere('info_en','LIKE','%'.$q.'%')->get();
    $categories = Category::all();
    $currency = Currency::find(2);
        // return view('front.products', compact('products', 'categories', 'currency'));
        return view('front.products',compact('products', 'categories', 'currency'))->withQuery ( $q );
    }



    public function searchcat3(Request $request)
    {

        $categories = Category::all();
        $currency = Currency::find(2);
      //  if ($request->ajax() && isset($request->categories)) {
         if ($request->ajax() && (isset($request->categories)||(isset($request->price1)||isset($request->price2)))) {
            $categoriesId = $request->categories;

            //var_dump($categories) ; die ;
            
            $arrayCatId =  array();
            if(isset($categoriesId)){
            foreach($categoriesId as $cat){
              array_push($arrayCatId,$cat);
            }}
           
            
            $products = Product::where('price','>',$request->price1)->where('price','<',$request->price2)->get();
            if(isset($categoriesId)){
             $products= $products>whereIn('category_id',$arrayCatId);   
            }
          //  dd($products);  
            $html= '';
            foreach ($products as $product) {
 
                   $html .=  '<div class="col-md-6 col-lg-4 col-sm-6">
                    <div class="single-shop mb-40">
                        <div class="shop-img">'.
                            '<a href="#"><img src="'.asset("upload/product/".$product->img_main). '" alt=""></a>'.
                             '<div class="price-up-down">
                               
                                <span class="sale-new">sale</span> 

                            </div>'.
                           
                           ' <div class="button-group">
                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick-view'.$product->id.'">'.
                                    '<i class="pe-7s-cart"></i>'.
                               ' </a>
                                <a class="wishlist" href="#" title="Wishlist" data-toggle="modal" data-target="#quick-view">
                                    <!-- <i class="pe-7s-like"></i> -->
                                </a>'.
                                '<a href="#" data-toggle="modal" data-target="#quick-view'.$product->id .'" title="Quick View'.$product->id .'">'.
                                    '<i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>'.
                        '<div class="shop-text-all">
                            <div class="title-color fix">
                                <div class="shop-title f-left">
                                    <h3><a href="'. route("product_details.show",$product->id).'">'.$product->name_en.'</a></h3>
                                </div>'.
                                '<div class="price f-right">'.
                                    '<span class="new">'.$product->price.' '.$currency->name_en .'</span>' 

                               .'</div>
                            </div>
                        </div>
                    </div>
                </div></div>'   ;


            }
            return $html;
        } 
         if ($request->ajax() && !(isset($request->categories))) {
            //  dd($products);  
            $products=Product::latest()->paginate(50);
            $html= '';
            foreach ($products as $product) {
 
                   $html .=  '<div class="col-md-6 col-lg-4 col-sm-6">
                    <div class="single-shop mb-40">
                        <div class="shop-img">'.
                            '<a href="#"><img src="'.asset("upload/product/".$product->img_main). '" alt=""></a>'.
                             '<div class="price-up-down">
                               
                                <span class="sale-new">sale</span> 

                            </div>'.
                           
                           ' <div class="button-group">
                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick-view'.$product->id.'">'.
                                    '<i class="pe-7s-cart"></i>'.
                               ' </a>
                                <a class="wishlist" href="#" title="Wishlist" data-toggle="modal" data-target="#quick-view">
                                    <!-- <i class="pe-7s-like"></i> -->
                                </a>'.
                                '<a href="#" data-toggle="modal" data-target="#quick-view'.$product->id .'" title="Quick View'.$product->id .'">'.
                                    '<i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>'.
                        '<div class="shop-text-all">
                            <div class="title-color fix">
                                <div class="shop-title f-left">
                                    <h3><a href="'. route("product_details.show",$product->id).'">'.$product->name_en.'</a></h3>
                                </div>'.
                                '<div class="price f-right">'.
                                    '<span class="new">'.$product->price.' '.$currency->name_en .'</span>' 

                               .'</div>
                            </div>
                        </div>
                    </div>
                </div></div>'   ;


            }
            return $html;
         }

        if($request->ajax() && isset($request->price )) {

          $request->price ;
          return  str_split($request->price, 0);



        }

        
        
    }


    
    public function searchcat4(Request $request)
    {
        $categories = Category::all();
        $currency = Currency::find(2);
        if ($request->ajax() && (isset($request->categories)||(isset($request->price1)||isset($request->price2)))) {

            $categoriesId = $request->categories;

            //var_dump($categories) ; die ;
            
            $arrayCatId =  array();
            if(isset($categoriesId)){
            foreach($categoriesId as $cat){
              array_push($arrayCatId,$cat);
            } }
           
            
            $products = Product::where('price','>',$request->price1)->where('price','<',$request->price2)->get();
            if(isset($categoriesId)){
             $products= $products>whereIn('category_id',$arrayCatId);   
            }

            $html= '';
            foreach ($products as $product) {
 
                   $html .=  '<div class="single-shop mb-30">
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="shop-list-left">
                                                                <div class="shop-img">'.
                                                                    '<a href="#"><img src="'.asset('upload/product/'.$product->img_main). '" alt=""> </a>'.
                                                                    '<div class="shop-quick-view">
                                                                        <a href="#" data-toggle="modal" data-target="#quick-view'.$product->id.'" title="Quick View">
                                                                            
                                                                        </a>
                                                                    </div>
                                                                    <div class="price-up-down">
                                                                        <span class="sale-new">New</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                                            <div class="shop-list-right">
                                                                <div class="shop-list-all">
                                                                    <div class="shop-list-name">
                                                                        <h3><a href="'. route("product_details.show",$product->id).'">'.$product->name_en.'</a></h3>
                                                                    </div>
                                                                    <div class="shop-list-rating">
                                                                        <span class="ratting">
                                                                                <!-- <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i> -->
                                                                            </span>
                                                                    </div>
                                                                    <p>
                                                                        '.$product->info_en.'
                                                                    </p>
                                                                    <div class="shop-list-price">
                                                                        <span class="list-price">'
                                                                        .'<span class="new">'.$product->price.' '.$currency->name_en .'</span>'.'</div>
                                                                        <div class="shop-list-cart">
                                                                          <div class="shop-group">
                                                                            <a href="#" title="Add to Cart">
                                                                                <i class="pe-7s-cart"></i> add to cart
                                                                            </a>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  ';


            }
            return $html;
        } 
         if ($request->ajax() && (!(isset($request->price1))||!(isset($request->price2)))) {
            //  dd($products);  
            $products=Product::latest()->paginate(50);
            $html= '';
            foreach ($products as $product) {
 
                   $html .=  '<div class="single-shop mb-30">
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="shop-list-left">
                                                                <div class="shop-img">'.
                                                                    '<a href="#"><img src="'.asset('upload/product/'.$product->img_main). '" alt=""> </a>'.
                                                                    '<div class="shop-quick-view">
                                                                        <a href="#" data-toggle="modal" data-target="#quick-view'.$product->id.'" title="Quick View">
                                                                            
                                                                        </a>
                                                                    </div>
                                                                    <div class="price-up-down">
                                                                        <span class="sale-new">New</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                                            <div class="shop-list-right">
                                                                <div class="shop-list-all">
                                                                    <div class="shop-list-name">
                                                                        <h3><a href="'. route("product_details.show",$product->id).'">'.$product->name_en.'</a></h3>
                                                                    </div>
                                                                    <div class="shop-list-rating">
                                                                        <span class="ratting">
                                                                                <!-- <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i> -->
                                                                            </span>
                                                                    </div>
                                                                    <p>
                                                                        '.$product->info_en.'
                                                                    </p>
                                                                    <div class="shop-list-price">
                                                                        <span class="list-price">'
                                                                        .'<span class="new">'.$product->price.' '.$currency->name_en .'</span>'.'</div>
                                                                        <div class="shop-list-cart">
                                                                          <div class="shop-group">
                                                                            <a href="#" title="Add to Cart">
                                                                                <i class="pe-7s-cart"></i> add to cart
                                                                            </a>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  '   ;


            }
            return $html;
         }

        if($request->ajax() && isset($request->price )) {

          $request->price ;
          return  str_split($request->price, 0);



        }

        
        
    }
}
