<?php

namespace App\Http\Controllers\Admin;
use App\Newsletter;
use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //'name_en', 'name_ar','country_id','parent_id',
        $newsletters=Category::latest()->paginate(50);
        return view('admin.newsletter.index',compact('newsletters'))
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

        $newsletters=Newsletter::all();
        return view('admin.newsletters.create', compact('newsletters'));
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'name_en', 'name_ar','country_id','parent_id',
        //
        request()->validate([
            'email' => 'required|email',
            'mobile' => 'required|number',
         
        ]);
        $input = $request->all();
        Newsletter::create($input);

        return redirect()->route('newsletters.index')
        ->with('success','Newsletter Add successfully');
   
    }

  

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        //
        $newsletter->delete();
        return redirect()->route('newsletters.index')
        ->with('success','Newsletter Deleted successfully');
   
    }
}
