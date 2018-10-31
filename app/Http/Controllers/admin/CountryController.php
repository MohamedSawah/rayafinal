<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Country;
use App\Currency;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $countries=Country::latest()->paginate(30);
        return view('admin.countries.index ',compact('countries','selectedcurrency'))
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
       $Currencies = Currency::all();

    //  // $selectedCountries = Country::first()->country_id;
    //    return view('admin.countries.create', compact('Currencies'));
    return view('admin.countries.create', compact('Currencies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //currency_id
        request()->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'currency_id' => 'required',
        ]);

        Country::create($request->all());
        return redirect()->route('countries.index')
             ->with('success','Currency Add successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
        $Currencies = Currency::all();
        $selectedcurrency = Country::first()->currency_id;
        return view('admin.countries.edit ',compact('country','selectedcurrency','Currencies'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //
        request()->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'currency_id' => 'required',
        ]);

        $country->update($request->all());
        return redirect()->route('countries.index')
             ->with('success','Country Updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
        $country->delete();
        return redirect()->route('countries.index')
             ->with('success','Country deleted successfully');
        
    }
}
