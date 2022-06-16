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
    public function wizard(){
        return view('front.pages.wizard');
    }
    public function findMatch(Request $request){
      $data = $request->all();
       return view('front.pages.wizard');
    }
    public function profiles(){
        return view('front.pages.profiles');
    }
}
