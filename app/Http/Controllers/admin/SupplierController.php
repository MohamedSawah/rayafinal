<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
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
        $suppliers=Supplier::latest()->paginate(50);
        return view('admin.suppliers.index',compact('suppliers','x'))
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
        return view('admin.suppliers.create');
   
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
            'code' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'note' => 'nullable',
            'adress' => 'nullable',
        ]);
        $supplier=new Supplier;
        // $building->postcode = $request->postcode ;
        $supplier->code=$request->code;
        $supplier->name=$request->name;
        $supplier->phone=$request->phone;
        $supplier->note=$request->note;
        $supplier->adress=$request->adress;
        $supplier-> save();
        //$supplier->country_id()->sync($request->country_id);
        return redirect()->route('suppliers.index')
        ->with('success','supplier Add successfully');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
        return view('admin.suppliers.edit', compact('supplier'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
        request()->validate([
            'code' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'note' => 'nullable',
            'adress' => 'nullable',
        ]);
        $supplier->update([
            'code' => $request->input('code'),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),            
            'note' => $request->input('note'),
            'adress' => $request->input('adress'),
           
            ]);
            return redirect()->route('suppliers.index')
             ->with('success','supplier Updated successfully');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
        $supplier->delete();
        return redirect()->route('suppliers.index')
             ->with('success','supplier Deleted successfully');
  
    }
}
