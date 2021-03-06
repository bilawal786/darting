<?php

namespace App\Http\Controllers\Admin;
use App\Sport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function index()
    {

        $sport = Sport::all();
        return view('admin.sports.index', compact('sport'));
    }

    public function edit($id)
    {

        $sport = Sport::find($id);

        return view('admin.sports.edit', compact('sport'));
    }

    public function create()
    {

        return view('admin.sports.create');
    }

    public function store(Request $request)
    {
        $sport = new Sport();
        $sport->name = $request->name;
        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $sport->image = 'images/' . $name;
        }
        $sport->save();

        $notification = array(
            'messege' => 'Sport Update Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function update(Request $request, $id)
    {
        $sport = Sport::find($id);
        $sport->name = $request->name;
        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $sport->image = 'images/' . $name;
        }
        $sport->save();
        $notification = array(
            'message' => 'Sport Update Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);


    }
}
