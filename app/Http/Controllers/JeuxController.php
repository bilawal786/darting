<?php

namespace App\Http\Controllers;
use App\Jeux;
use Illuminate\Http\Request;

class JeuxController extends Controller
{
    public function index()
    {

        $jeux = Jeux::all();
        return view('admin.jeux.index', compact('jeux'));
    }
    public function edit($id)
    {

        $jeux = Jeux::find($id);

        return view('admin.jeux.edit', compact('jeux'));
    }
    public function create()
    {

        return view('admin.jeux.create');
    }
    public function store(Request $request)
    {

        $jeux = new Jeux();
        $jeux->name = $request->name;

        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $jeux->image = 'images/' . $name;
        }
        $jeux->save();

        $notification = array(
            'messege' => 'Sport Update Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);

    }
    public function update(Request $request, $id)
    {
        $jeux = Jeux::find($id);
        $jeux->name = $request->name;
        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $jeux->image = 'images/' . $name;
        }
        $jeux->save();
        $notification = array(
            'message' => 'Sport Update Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);


    }
}
