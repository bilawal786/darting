<?php

namespace App\Http\Controllers;

use App\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FeatureController extends Controller
{
    public function index(){
        $feature=Feature::find(1);
        return view('admin.features.index',compact('feature'));
    }
    public function update(Request $request){
        $feature=Feature::find(1);


        $feature->content1=$request->content1;
        if ($request->hasfile('image')){
            $image1=$request->file('image');
            $name =time().'image'. '.' .$image1->getClientOriginalExtension();
            $destinationPath ='images/';
            $image1->move($destinationPath,$name);
            $feature->image ='images/'.$name;
        }
        $feature->content2=$request->content2;
        $feature->save();
        return Redirect()->back();

    }
}
