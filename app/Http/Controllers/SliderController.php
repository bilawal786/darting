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
        $slide->link1=$request->link1;
        $slide->link2=$request->link2;
        $slide->link3=$request->link3;
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
        $slide->link4=$request->link4;
        $slide->link5=$request->link5;
        $slide->link6=$request->link6;
        if ($request->hasfile('image4')) {
            $image1 = $request->file('image4');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $slide->image4 = 'images/' . $name;
        }
        if ($request->hasfile('image5')) {
            $image1 = $request->file('image5');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $slide->image5 = 'images/' . $name;
        }
        if ($request->hasfile('image6')) {
            $image1 = $request->file('image6');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $slide->image6 = 'images/' . $name;
        }

        $slide->update();
        $notification = array(
            'messege' => 'Mise à jour partie travail',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
