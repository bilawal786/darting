<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about =About::first();
        return view('admin.about.index',compact('about'));
    }
    public function update(Request $request){
        $about =About::find(1);
        $about->title1=$request->title1;
        $about->title2=$request->title2;
        $about->count1=$request->count1;
        $about->count2=$request->count2;
        $about->count3=$request->count3;
        $about->count4=$request->count4;
        if ($request->hasfile('image1')) {
            $image1 = $request->file('image1');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $about->image1 = 'images/' . $name;
        }
        if ($request->hasfile('image2')) {
            $image1 = $request->file('image2');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $about->image2 = 'images/' . $name;
        }
        if ($request->hasfile('image3')) {
            $image1 = $request->file('image3');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $about->image3 = 'images/' . $name;
        }
        if ($request->hasfile('image4')) {
            $image1 = $request->file('image4');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $about->image4 = 'images/' . $name;
        }
        $about->update();
        $notification = array(
            'messege' => 'Mettre à jour',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
