<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){
    $country=Country::all();
    return view('admin.country.index',compact('country'));
    }
    public function create(){

        return view('admin.country.create');
    }
    public function store(Request $request){
        $Country=new Country();
        $Country->country=$request->country;
        $Country->save();
        $notification = array(
            'messege' => 'Pays créé!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
    public function edit($id)
    {
    $country=Country::find($id);
        return view('admin.country.edit',compact('country'));
    }
    public function update(Request $request ,$id){
        $country=Country::find($id);
        $country->country=$request->country;
        $country->update();
        $notification = array(
            'messege' => 'Pays mis à jour !',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
