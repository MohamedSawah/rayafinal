<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 'title_ar', 'title_en', 'name_ar', 'name_en', 'position_ar', 'position_en', 'image',
        $x=1;
        $opinions=Opinion::latest()->paginate(30);
         return view('admin.opinions.index ',compact('opinions','x'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.opinions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 'title_ar', 'title_en', 'name_ar', 'name_en', 'position_ar', 'position_en', 'image',
        request()->validate([         
            'name_en' => 'nullable',
            'name_ar' => 'required',
            'title_ar' => 'nullable',
            'title_en' => 'required',
            'position_ar' => 'nullable',
            'position_en' => 'nullable',
            'image'=>'nullable|image:jpg,png|max:5000'
            ]);

            $opinion= $request->all();
            $opinion=new Opinion;
            $opinion->name_en=$request->name_en;
            $opinion->name_ar=$request->name_ar;
            $opinion->title_ar=$request->title_ar;
            $opinion->title_en=$request->title_en;
            $opinion->position_ar=$request->position_ar;
            $opinion->position_en=$request->position_en;
            $opinion->save();
            $id = $opinion->id;
           if($main_image = $request->file('image')){
            $extension=$main_image->getClientOriginalExtension();
            $image_name = $id.'_opinion'.'.'.$extension;
            $main_image->move(public_path('/upload/opinion'), $image_name);
             Opinion::where('id',$id)->update(['image' => $image_name]);
           
            }
           return redirect()->route('opinions.index')
             ->with('success','opinion Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function show(Opinion $opinion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function edit(Opinion $opinion)
    {
        //
          return view('admin.opinions.edit', compact('opinion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opinion $opinion)
    {
        //
           //
           request()->validate([         
            'name_en' => 'nullable',
            'name_ar' => 'required',
            'title_ar' => 'required',
            'title_en' => 'nullable',
            'position_ar' => 'required',
            'position_en' => 'nullable',
            'image'=>'nullable|image:jpg,png|max:5000'
            ]);

     $opinion->update([
            'name_en' => $request->input('name_en'),
            'name_ar' => $request->input('name_ar'),
            'title_ar' =>$request->input('title_ar') ,
            'title_en' =>$request->input('title_en') ,
            'position_ar' => $request->input('position_ar'),
            'position_en' => $request->input('position_en'),
        ]);
            $id = $opinion->id;
           if($main_image = $request->file('image')){
            $extension=$main_image->getClientOriginalExtension();
            $image_name = $id.'_opinion'.'.'.$extension;
            $main_image->move(public_path('/upload/opinion'), $image_name);
             Opinion::where('id',$id)->update(['image' => $image_name]);
           
            }
             return redirect()->route('opinions.index')
             ->with('success','opinion Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opinion $opinion)
    {
        //
          if($opinion->img_main != null){
       $image_path = public_path().'/upload/opinion/'.$opinion->image;
       unlink($image_path);
       }
        $opinion->delete();
         return redirect()->route('opinions.index')
             ->with('success','opinion Deleted successfully');
    }
}
