<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Label;
use App\Category;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $labels=label::latest()->paginate(50);
        return view('admin.labels.index',compact('labels'))
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
        $categories=Category::all();
        return view('admin.labels.create', compact('categories'));
   
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
            'name_en' => 'required',
            'name_ar' => 'required',
            'category_id' => 'required',
            'status' => 'required',
            'order' => 'required',
        ]);
        $label=new label;
        // $building->postcode = $request->postcode ;
        $label->name_en=$request->name_en;
        $label->name_ar=$request->name_ar;
        $label->category_id=$request->category_id;
        $label->status=$request->status;
        $label->order=$request->order;
        $label-> save();
        //$label->country_id()->sync($request->country_id);
        return redirect()->route('labels.index')
        ->with('success','label Add successfully');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Label  $label
     * @return \Illuminate\Http\Response
     */
    public function show(Label $label)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Label  $label
     * @return \Illuminate\Http\Response
     */
    public function edit(Label $label)
    {
        //
        $categories=Category::all();
        return view('admin.labels.edit', compact('label','categories'));
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Label  $label
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Label $label)
    {
        //
        request()->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'category_id' => 'required',
            'status' => 'required',
            'order' => 'required',
            
        ]);
        // dd($request);
        $label->update([
            'name_en' => $request->input('name_en'),
            'name_ar' => $request->input('name_ar'),
            'category_id' => $request->input('category_id'),            
            'status' => $request->input('status'),
            'order' => $request->input('order'),
           
            ]);
            return redirect()->route('labels.index')
             ->with('success','label Updated successfully');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Label  $label
     * @return \Illuminate\Http\Response
     */
    public function destroy(Label $label)
    {
        //
        $label->delete();
        return redirect()->route('labels.index')
             ->with('success','label Deleted successfully');
  

    }
}
