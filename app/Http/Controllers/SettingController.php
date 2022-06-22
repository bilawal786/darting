<?php

namespace App\Http\Controllers;
use App\Setting;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {

        return view('admin.settings.index')->with('setting',Setting::first());
    }
    public function update(){



        $setting=Setting::first();
        $setting->name=request()->name;
        $setting->email=request()->email;
        $setting->phone=request()->phone;
        $setting->logo=request()->logo;
        $setting->address=request()->address;
        $setting->link1=request()->link1;
        $setting->link2=request()->link2;
        $setting->link3=request()->link3;
        $setting->link4=request()->link4;
        $setting->link5=request()->link5;

        $setting->save();

        return redirect()->back();
    }
}


