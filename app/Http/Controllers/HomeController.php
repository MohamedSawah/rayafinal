<?php

namespace App\Http\Controllers;

use App\Category;
use App\Currency;
use App\Opinion;
use App\Product;
use App\Setting;
use App\Slideshow;
use App\Newsletter;
use Config;
use Session;
use App; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slideshow::where('status', 1)->get();
        $settings = Setting::find(1);
        $categories = Category::where('parent_id','!=', 0)->where('status', 1)->take(10)->get();
        $products = Product::where('status', 1)->get();
        $latest_products = Product::orderBy('id', 'desc')->take(10)->get();
        $opinions = Opinion::all();
        $currency = Currency::find(2);
        return view('home', compact('sliders', 'settings', 'categories', 'products', 'currency', 'latest_products','opinions'));
    }
    public function newsletter(Request $request){
           request()->validate([
            'email' => 'required|email|unique:news_letter',
           ]);
        $input = $request->all();

        //   $branch = new Branch;
        Newsletter::create($input);
        
        return redirect()->route('home')
            ->with('success', 'newsletter added successfully');
    }

    public function set_lang($locale)
    {
        if (in_array($locale, Config::get('app.locales'))) {
            Session::put('locale', $locale);
        }
        return redirect()->back();
    }

  

}
