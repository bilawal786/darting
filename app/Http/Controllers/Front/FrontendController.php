<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('front.pages.index');
    }
    public function function(){
        return view('front.pages.function');
    }
    public function profiles(){
        return view('front.dashboard.profiles');
    }
    public function profile(){
        return view('front.dashboard.profile');
    }
    public function dashboard(){
        return view('front.dashboard.index');
    }
    public function activityCreate(){
        return view('front.dashboard.activityCreate');
    }
    public function activity(){
        return view('front.dashboard.activity');
    }
    public function myProfile(){
        return view('front.dashboard.myProfile');
    }
}
