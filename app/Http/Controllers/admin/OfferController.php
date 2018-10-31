<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $offers=Offer::latest()->paginate(30);
        return view('admin.offers.index  ',compact('offers'))
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
        return view('admin.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  'title_en', 'title_ar',
    // 'img', 'link','status',
        request()->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            'img' => 'required',
            'link' => 'required',
            'status' => 'required',

        ]);
        $offer = $request->all();
        $offer=new Offer;
        $offer->title_ar=$request->title_ar;
        $offer->title_en=$request->title_en;
        $offer->img=$request->img;
        $offer->link=$request->link;
        $offer->status=$request->status;
        $offer->save();

        $id = $offer->id;
        if($main_image = $request->file('img')){
            $extension=$main_image->getClientOriginalExtension();
            $image_name = $id.'_offer'.'.'.$extension;
            $main_image->move(public_path('/upload/offer'), $image_name);
            Offer::where('id',$id)->update(['img' => $image_name]);
            
        }
        return redirect()->route('offers.index')
             ->with('success','offer Add successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
        return view('admin.offers.show',compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        return view('admin.offers.edit ',compact('offer'));
        //return view('admin.offers.edit',compact('offer'));
        //return $offer;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        request()->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            
            'link' => 'required',
            'status' => 'required',

        ]);
        $offer->update([
            'title_en' => $request->input('title_en'),
            'title_ar' => $request->input('title_ar'),
            'link' => $request->input('link'),
            'status' => $request->input('status'),

            ]);
            $id= $offer->id;
            if($main_image = $request->file('img')){
                $extension=$main_image->getClientOriginalExtension();
                $image_name = $id.'_offer'.'.'.$extension;
                $main_image->move(public_path('/upload/offer'), $image_name);
                Offer::where('id',$id)->update(['img' => $image_name]);
                
            }
        return redirect()->route('offers.index')
             ->with('success','Offer Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        //
        $offer->delete();


        return redirect()->route('offers.index')
                        ->with('success','offer deleted successfully');
    }
    
}
