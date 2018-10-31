<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slideshow;
use Illuminate\Http\Request;

class SlideShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $x = 1;
        $slideshows = Slideshow::latest()->paginate(30);
        return view('admin.slideshows.index  ', compact('slideshows', 'x'))
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
        return view('admin.slideshows.create');
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
        //  'title_en', 'title_ar',
        // 'img', 'link','status',
        request()->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            'img' => 'required',
            'link' => 'required',
            'status' => 'required',

        ]);
        $slideshow = $request->all();
        $slideshow = new Slideshow;
        $slideshow->title_ar = $request->title_ar;
        $slideshow->title_en = $request->title_en;
        $slideshow->intro_ar = $request->intro_ar;
        $slideshow->intro_en = $request->intro_en;
        $slideshow->details_ar = $request->details_ar;
        $slideshow->details_en = $request->details_en;
        $slideshow->img = $request->img;
        $slideshow->link = $request->link;
        $slideshow->status = $request->status;
        $slideshow->save();

        $id = $slideshow->id;
        if ($main_image = $request->file('img')) {
            $extension = $main_image->getClientOriginalExtension();
            $image_name = $id . '_slideshow' . '.' . $extension;
            $main_image->move(public_path('/upload/slideshow'), $image_name);
            Slideshow::where('id', $id)->update(['img' => $image_name]);
            // response()->json(['uploaded' => '/upload/slideshow/'.$image_name]);
        }
        return redirect()->route('slideshows.index')
            ->with('success', 'slideshow Add successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function show(Slideshow $slideshow)
    {
        //
        return view('admin.slideshows.show', compact('slideshow'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function edit(Slideshow $slideshow)
    {
        //
        return view('admin.slideshows.edit ', compact('slideshow'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slideshow $slideshow)
    {
        //
        request()->validate([
            'title_en' => 'required',
            'title_ar' => 'required',

            'link' => 'required',
            'status' => 'required',

        ]);
        $slideshow->update([
            'title_en' => $request->input('title_en'),
            'title_ar' => $request->input('title_ar'),
            'intro_en' => $request->input('intro_en'),
            'intro_ar' => $request->input('intro_ar'),
            'details_en' => $request->input('details_en'),
            'details_ar' => $request->input('details_ar'),
            'link' => $request->input('link'),
            'status' => $request->input('status'),

        ]);
        $id = $slideshow->id;
        if ($main_image = $request->file('img')) {
            $extension = $main_image->getClientOriginalExtension();
            $image_name = $id . '_slideshow' . '.' . $extension;
            $main_image->move(public_path('/upload/slideshow'), $image_name);
            Slideshow::where('id', $id)->update(['img' => $image_name]);

        }
        return redirect()->route('slideshows.index')
            ->with('success', 'slideshow Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slideshow $slideshow)
    {
        //
        $slideshow->delete();

        return redirect()->route('slideshows.index')
            ->with('success', 'slideshow deleted successfully');

    }
}
