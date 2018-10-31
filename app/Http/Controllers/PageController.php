<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
class PageController extends Controller
{
     public function show($slug){
        $pages=Page::where('slug',$slug)->get();
        $choose=Page::find('5');
        return view('front.pages',compact('pages','choose'));
      }

      
   
}
