<?php

namespace App\Http\Controllers;

use App\Country;
use App\location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $country=location::all();
        return view('admin.location.index',compact('country'));
    }
    public function create(){
        $country=Country::all();
        return view('admin.location.create',compact('country'));
    }
    public function store(Request $request){
        $countryloc=new location();
        $countryloc->country_id=$request->country_id;
        if ($request->hasfile('image1')) {
            $image1 = $request->file('image1');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $countryloc->image1 = 'images/' . $name;
        }
        if ($request->hasfile('image2')) {
            $image2 = $request->file('image2');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image2->move($destinationPath, $name);
            $countryloc->image2 = 'images/' . $name;
        }
        $countryloc->save();
        $notification = array(
            'messege' => 'Successfully added a activity',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
    public function update(Request $request,$id){
        $countryloc=location::find($id);
        $countryloc->country_id=$request->country_id;
        if ($request->hasfile('image1')) {
            $image1 = $request->file('image1');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $countryloc->image1 = 'images/' . $name;
        }
        if ($request->hasfile('image2')) {
            $image2 = $request->file('image2');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image2->move($destinationPath, $name);
            $countryloc->image2 = 'images/' . $name;
        }
        $countryloc->update();
        $notification = array(
            'messege' => 'Successfully added a activity',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
    public function edit($id){
        $country=location::find($id);
        $countrys=Country::all();
        return view('admin.location.edit',compact('country','countrys'));
    }
    public function delete($id){
        $country=location::find($id);
        $country->delete();
        $notification = array(
            'messege' => 'Successfully added a activity',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
