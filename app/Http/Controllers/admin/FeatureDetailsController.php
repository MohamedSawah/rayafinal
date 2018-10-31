<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\feature;
use App\FeatureDetails;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeatureDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = FeatureDetails::latest()->paginate(50);
        return view('admin.featuredetails.index', compact('features'))
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
        $featutes = FeatureDetails::all();
        return view('admin.featuredetails.create', compact('features'));

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
            'feature_id' => 'required',

        ]);

        $feature = new FeatureDetails();
        $feature->name_en = $request->name_en;
        $feature->name_ar = $request->name_ar;
        $feature->details_en = $request->details_en;
        $feature->details_ar = $request->details_ar;
        $feature->feature_id = $request->feature_id;
        $feature->save();

        return redirect()->route('featuredetails.index')
            ->with('success', 'feature details Add successfully');

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
        $feature = FeatureDetails::find($id);
        return view('admin.featuredetails.show', compact('feature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Countries = Country::all();
        $feature = FeatureDetails::find($id);
        $features = FeatureDetails::all();
        return view('admin.featuredetails.edit', compact('feature', 'Countries', 'features'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\feature  $feature
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {

        request()->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
        ]);
        $feature= FeatureDetails::find($id);
        $input = $request->all();
        $feature->update($input);
        return redirect()->route('featuredetails.index')
            ->with('success', 'feature details Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feature = FeatureDetails::find($id);
        $feature->delete();
        return redirect()->route('featuredetails.index')
            ->with('success', 'feature details Deleted successfully');

    }
}
