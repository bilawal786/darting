<?php

namespace App\Http\Controllers;
use App\Setting;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting=Setting::first();
        return view('admin.settings.index',compact('setting'));
    }
    public function update(Request $request){

        $setting=Setting::find(1);
        $setting->name=$request->name;
        $setting->email=$request->email;
        $setting->phone=$request->phone;
        if ($request->hasfile('logo')) {
            $image1 = $request->file('logo');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $setting->logo = 'images/' . $name;
        }
        $setting->address=$request->address;
        $setting->link1=$request->link1;
        $setting->link2=$request->link2;
        $setting->link3=$request->link3;
        $setting->link4=$request->link4;
        $setting->link5=$request->link5;
        $setting->footercontent=$request->footercontent;
        if ($request->hasfile('banarimage')) {
            $image1 = $request->file('banarimage');
            $name = time() . 'banarimage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $setting->banarimage = 'images/' . $name;
        }
        $setting->save();
        return redirect()->back();
    }
}


