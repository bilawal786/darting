<?php

namespace App\Http\Controllers;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting=Setting::all();
        return view('admin.settings.index',compact('setting'));
    }
}
