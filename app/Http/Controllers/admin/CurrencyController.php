<?php


namespace App\Http\Controllers\Admin;
use App\Currency;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $currencies=Currency::latest()->paginate(50);
        return view('admin.currencies.index ',compact('currencies'))
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
        return view('admin.currencies.create');
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
        ]);

        Currency::create($request->all());
        return redirect()->route('currencies.index')
             ->with('success','Currency Add successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
        //
        return view('admin.currencies.show',compact('currency'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
        //
         return view('admin.currencies.edit',compact('currency'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Currency $currency)
    {
        //
        request()->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
        ]);

        $currency->update($request->all());
        return redirect()->route('currencies.index')
             ->with('success','Currency Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currency $currency)
    {
        //
        $currency->delete();


        return redirect()->route('currencies.index')
                        ->with('success','currency deleted successfully');
    }
}
