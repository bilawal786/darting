<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Question;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog=Blog::all();
        return view('admin.blog.index',compact('blog'));
    }
    public function create(){
        return view('admin.blog.create');
    }

    public function store(Request $request){

        $blog=new Blog();
        $blog->title=$request->title;

        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $blog->image = 'images/' . $name;

        }



        $blog->description=$request->description;

        $blog->save();
        $notification = array(
            'messege' => 'post created!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function delete($id){
        $blog = Blog::find($id);
        $blog->delete();
        $notification = array(
            'messege' => 'Supprimer avec succès!',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);
    }

    public function update(Request $request, $id)
{

    $blog=Blog::find($id);
    $blog->title=$request->title;
    if ($request->hasfile('image')) {
        $image1 = $request->file('image');
        $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'images/';
        $image1->move($destinationPath, $name);
        $blog->image = 'images/' . $name;
    }
    $blog->description=$request->description;

    $blog->save();
    $notification = array(
        'messege' => 'post updated!',
        'alert-type' => 'success'
    );
    return Redirect()->back()->with($notification);
}
public function edit($id){
        $blog=Blog::find($id);
        return view('admin.blog.edit',compact('blog'));
}
}
