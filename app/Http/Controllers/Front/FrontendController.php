<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        return view('front.pages.index');
    }
    public function function(){
        return view('front.pages.function');
    }
    public function profiles(){
        $users = User::where('role', '1')->where('id', '!=', Auth::user()->id)->get();
        return view('front.dashboard.profiles', compact('users'));
    }
    public function profile($id){
        $idd = base64_decode($id);
        $user = User::find($idd);
        return view('front.dashboard.profile', compact('user'));
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
        $user= Auth::user();
        return view('front.dashboard.myProfile', compact('user'));
    }
    public function notification(){
        $user= Auth::user();
        return view('front.dashboard.notification', compact('user'));
    }

}
