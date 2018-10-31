<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\feature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //'name_en', 'name_ar','country_id','parent_id',
        $features = Feature::latest()->paginate(50);
        return view('admin.features.index', compact('features'))
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
        $featutes = Feature::all();
        return view('admin.features.create', compact('features'));

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
            'name_en' => 'required',
            'name_ar' => 'required',

        ]);

        $feature = new Feature();
        $feature->name_en = $request->name_en;
        $feature->name_ar = $request->name_ar;
        $feature->slug = str_slug($request->name_en);
        $feature->save();

        return redirect()->route('features.index')
            ->with('success', 'feature Add successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $feature = feature::find($id);
        return view('admin.features.show', compact('feature'));}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(feature $feature)
    {
        //
        $Countries = Country::all();
        $features = feature::all();
        return view('admin.features.edit', compact('feature', 'Countries', 'features'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\feature  $feature
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, feature $feature)
    {
        //
        request()->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
        ]);
        $feature->update(['name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'slug' => str_slug($request->name_en),
        ]);
        return redirect()->route('features.index')
            ->with('success', 'feature Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(feature $feature)
    {
        //
        $feature->delete();
        return redirect()->route('features.index')
            ->with('success', 'feature Deleted successfully');

    }
}
