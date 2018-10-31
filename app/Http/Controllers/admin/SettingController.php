<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $x = 1;
        $settings = Setting::all();
        return view('admin.settings.index', compact('settings', 'x'))->
            with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
        return view('admin.settings.edit', compact('setting'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        // // 'phone', 'mobile2', 'mobile', 'email', 'supportEmail',
        // 'facebook', 'instagram', 'twitter', 'youtube', 'linkedin', 'worktime'

        //  request()->validate([
        //     'phone'=>'required',
        //     'mobile2'=>'required',
        //     'mobile'=>'required',
        //     'email'=>'required',
        //     'supportEmail'=>'required',
        //     'facebook'=>'required',
        //     'instagram'=>'required',
        //     'twitter'=>'required',
        //     'youtube'=>'required',
        //     'linkedin'=>'required',
        //     'worktime'=>'required',

        // ]);
        $setting->update([
            'phone' => $request->input('phone'),
            'mobile2' => $request->input('mobile2'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
            'supportEmail' => $request->input('supportEmail'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'twitter' => $request->input('twitter'),
            'youtube' => $request->input('youtube'),
            'linkedin' => $request->input('linkedin'),
            'worktime' => $request->input('worktime'),
            'address_en' => $request->input('address_en'),
            'address_ar' => $request->input('address_ar'),

        ]);
        return redirect()->route('settings.index')
            ->with('success', 'setting Updated successfully');

    }

}
