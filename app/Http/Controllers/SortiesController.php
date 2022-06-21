<?php

namespace App\Http\Controllers;
use App\Sorties;

use Illuminate\Http\Request;

class SortiesController extends Controller
{
    public function index(){
        $sorti = Sorties::all();
            return view('admin.sorties.index',compact('sorti'));
    }
    public function create()
    {

        return view('admin.sorties.create');
    }
    public function edit($id)
    {
        $sorti = Sorties::find($id);

        return view('admin.sorties.edit', compact('sorti'));
    }

    public function store(Request $request)
    {
        $sorti = new Sorties();
        $sorti->name = $request->name;
        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $sorti->image = 'images/' . $name;
        }
        $sorti->save();

        $notification = array(
            'messege' => 'Sport Update Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function update(Request $request, $id)
    {

        $sorti = Sorties::find($id);

        $sorti->name = $request->name;

        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $sorti->image = 'images/' . $name;
        }
        $sorti->save();
        $notification = array(
            'message' => 'Sport Update Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);


    }
}
