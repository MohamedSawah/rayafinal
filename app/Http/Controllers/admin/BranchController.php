<?php

namespace App\Http\Controllers\Admin;

use App\Branch;
use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //'name_en', 'name_ar','country_id','parent_id',
        $branches = Branch::latest()->paginate(50);
        return view('admin.branches.index', compact('branches'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches = Branch::all();
        $countries = Country::all();
        return view('admin.branches.create', compact('branches', 'countries'));

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

        request()->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'country_id' => 'required',
            'address_en' => 'required',
            'address_ar' => 'required',
            'phone' => 'required|min:11|numeric',
            'email' => 'email',
        ]);
        $input = $request->all();

        //   $branch = new Branch;
        Branch::create($input);
        return redirect()->route('branches.index')
            ->with('success', 'Branch Add successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Branch  $Branch
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $branch = Branch::find($id);
        return view('admin.branches.show', compact('branch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Branch  $Branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        //
        $countries = Country::all();
        $branches = Branch::all();
        return view('admin.branches.edit', compact('branches', 'countries','branch'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Branch  $Branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
  
        //
        request()->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'country_id' => 'required',
            'address_en' => 'required',
            'address_ar' => 'required',
            'phone' => 'required|min:11|numeric',
            'email' => 'email',
        ]);
        $branch->update($request->all());
        return redirect()->route('branches.index')
            ->with('success', 'Branch Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branch  $Branch
     * @return \Illuminate\Http\Response
     */

    public function destroy(Branch $branch)
    {
        
        $branch->delete();
        return redirect()->route('branches.index')
            ->with('success', 'Branch Deleted successfully');

    }
}
