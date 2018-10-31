<?php

namespace App\Http\Controllers\Admin;

// namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
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
        $services=Service::latest()->paginate(20);
        return view('admin.services.index',compact('services','x'))->
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
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'title_en', 'title_ar', 'intro_ar', 'intro_en', 'details_en',
        //  'details_ar', 'slug', 'image',
        request()->validate([
            'title_en'=>'nullable',
            'title_ar'=>'required',
            'intro_ar'=>'required',
            'intro_en'=>'nullable',
            'details_en'=>'nullable',
            'details_ar'=>'required',
            'image'=>'required',

        ]);

        $service=$request->all();
        $service= new Service;
        $service->title_en =$request->title_en;
        $service->title_ar =$request->title_ar;
        $service->intro_ar =$request->intro_ar;
        $service->intro_en =$request->intro_en;
        $service->details_en =$request->details_en;
        $service->details_ar =$request->details_ar;
        $service->slug =str_slug($request->title_en);
        $service->image =$request->image;
        $service->save();
        
        $id=$service->id;
        if($image =$request->file('image')){
            $extension=$image->getClientOriginalExtension();
            $image_name=$id.'service'.'.'.$extension;
             $image->move(public_path('/upload/service'), $image_name);
             Service::where('id',$id)->update(['image'=>$image_name]);

        }
      return redirect()->route('services.index')
             ->with('success','Service Add successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $services_show=Service::where('id',$id)->get();
        return view('admin.services.show',compact('services_show'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
      return view('admin.services.edit', compact('service'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
           request()->validate([
            'title_en'=>'nullable',
            'title_ar'=>'required',
            'intro_ar'=>'required',
            'intro_en'=>'nullable',
            'details_en'=>'nullable',
            'details_ar'=>'required',
            'image'=>'required',

        ]);

        $service->update([
            'title_en'=>$request->input('title_en'),
            'title_ar'=>$request->input('title_ar'),
            'intro_ar'=>$request->input('intro_ar'),
            'details_en'=>$request->input('details_en'),
            'details_ar'=>$request->input('details_ar'),
            'intro_en'=>$request->input('intro_en'),
            'slug'=>str_slug($request->input('title_en')),
            
        ]);
         $id=$service->id;
        if($image =$request->file('image')){
            $extension=$image->getClientOriginalExtension();
            $image_name=$id.'service'.'.'.$extension;
             $image->move(public_path('/upload/service'), $image_name);
             Service::where('id',$id)->update(['image'=>$image_name]);

        }
          return redirect()->route('services.index')
             ->with('success','Service Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
        if($service->image != null){
       $image_path = public_path().'/upload/service/'.$service->image;
       unlink($image_path);
       }
        $service->delete();


        return redirect()->route('services.index')
                        ->with('success','service deleted successfully');

    }
}
