<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\work;

class WorkController extends Controller
{
    public function index(){
        $work=Work::first();
        return view('admin.work.index',compact('work'));
    }
    public function update(Request $request)
    {
        $work=Work::find(1);

        $work->title1=$request->title1;
        $work->title2=$request->title2;
        $work->title3=$request->title3;
        $work->title4=$request->title4;
        $work->title5=$request->title5;
        $work->descruption1=$request->descruption1;
        $work->descruption2=$request->descruption2;
        $work->descruption3=$request->descruption3;
        if ($request->hasfile('image1')){
            $image1=$request->file('image1');
            $name =time().'image1'. '.' .$image1->getClientOriginalExtension();
            $destinationPath ='images/';
            $image1->move($destinationPath,$name);
            $work->image1 ='images/'.$name;
        }
        if ($request->hasfile('image2')){
            $image1=$request->file('image2');
            $name =time().'image2'. '.' .$image1->getClientOriginalExtension();
            $destinationPath ='images/';
            $image1->move($destinationPath,$name);
            $work->image2 ='images/'.$name;
        }
        if ($request->hasfile('image3')){
            $image1=$request->file('image3');
            $name =time().'image3'. '.' .$image1->getClientOriginalExtension();
            $destinationPath ='images/';
            $image1->move($destinationPath,$name);
            $work->image3 ='images/'.$name;
        }
        $work->update();
        $notification = array(
            'messege' => 'Mise à jour partie travail',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);


    }
}
