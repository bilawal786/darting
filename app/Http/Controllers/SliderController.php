<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $slide = Slider::first();
        return view ('admin.slider.index',compact('slide'));
    }
    public function create(){

        return view ('admin.slider.create');

        }
    public function update(Request $request){
        $slide=Slider::find(1);
        if ($request->hasfile('image1')) {
            $image1 = $request->file('image1');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $slide->image1 = 'images/' . $name;
        }
        if ($request->hasfile('image2')) {
            $image1 = $request->file('image2');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $slide->image2 = 'images/' . $name;
        }
        if ($request->hasfile('image3')) {
            $image1 = $request->file('image3');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $slide->image3 = 'images/' . $name;
        }
        $slide->update();
        $notification = array(
            'messege' => 'Mise à jour partie travail',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
