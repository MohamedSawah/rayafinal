<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
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
        $pages=Page::latest()->paginate(20);
        return view('admin.pages.index',compact('pages','x'))->
        with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.create');
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
         request()->validate([
            'title_en'=>'nullable',
            'title_ar'=>'required',
            'name_ar'=>'required',
            'name_en'=>'nullable',
            'details_en'=>'nullable',
            'details_ar'=>'required',
            'image'=>'required',

        ]);

        $page=$request->all();
        $page= new Page;
        $page->title_en =$request->title_en;
        $page->title_ar =$request->title_ar;
        $page->name_ar =$request->name_ar;
        $page->name_en =$request->name_en;
        $page->details_en =$request->details_en;
        $page->details_ar =$request->details_ar;
        $page->slug =str_slug($request->title_en);
        $page->image =$request->image;
        $page->save();
        
        $id=$page->id;
        if($image =$request->file('image')){
            $extension=$image->getClientOriginalExtension();
            $image_name=$id.'page'.'.'.$extension;
             $image->move(public_path('/upload/page'), $image_name);
             Page::where('id',$id)->update(['image'=>$image_name]);

        }
      return redirect()->route('pages.index')
             ->with('success','page Add successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //   $pages=Page::where('id',$id)->get();
        // dd($pages);
         $pages=Page::find($id);
        return view('admin.pages.show',compact('pages'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
          return view('admin.pages.edit', compact('page'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
            request()->validate([
            'title_en'=>'nullable',
            'title_ar'=>'required',
            'name_ar'=>'required',
            'name_en'=>'nullable',
            'details_en'=>'nullable',
            'details_ar'=>'required',
            'image'=>'nullable',

        ]);

        $page->update([
            'title_en'=>$request->input('title_en'),
            'title_ar'=>$request->input('title_ar'),
            'name_ar'=>$request->input('name_ar'),
            'details_en'=>$request->input('details_en'),
            'details_ar'=>$request->input('details_ar'),
            'name_en'=>$request->input('name_en'),
            'slug'=>str_slug($request->input('title_en')),
            
        ]);
         $id=$page->id;
        if($image =$request->file('image')){
            $extension=$image->getClientOriginalExtension();
            $image_name=$id.'page'.'.'.$extension;
             $image->move(public_path('/upload/page'), $image_name);
             Page::where('id',$id)->update(['image'=>$image_name]);

        }
          return redirect()->route('pages.index')
             ->with('success','page Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(page $page)
    {
        //
       if($page->image != null){
       $image_path = public_path().'/upload/page/'.$page->image;
       unlink($image_path);
       }
        $page->delete();


        return redirect()->route('pages.index')
                        ->with('success','page deleted successfully');

    }
}
