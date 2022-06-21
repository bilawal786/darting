<?php

namespace App\Http\Controllers;
use App\Divers;
use Illuminate\Http\Request;

class DiversController extends Controller
{
    public function index()
    {

        $divers = Divers::all();
        return view('admin.divers.index', compact('divers'));
    }

    public function edit($id)
    {

        $divers = Divers::find($id);

        return view('admin.divers.edit', compact('divers'));
    }

    public function create()
    {

        return view('admin.divers.create');
    }
    public function store(Request $request)
    {

        $divers = new Divers();
        $divers->name = $request->name;
        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $divers->image = 'images/' . $name;
        }
        $divers->save();

        $notification = array(
            'messege' => 'Sport Update Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);

    }
}
