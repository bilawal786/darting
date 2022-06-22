<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function update(Request $request){
        $user=Auth::user();
        $user->fname=$request->fname;
        $user->lname=$request->lname;
        $user->phone=$request->phone;
        $user->city=$request->city;
        $user->country=$request->country;
        if ($request->hasfile('profile_picture')) {
            $image1 = $request->file('profile_picture');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $user->profile_picture = 'images/' . $name;
        }
        if ($request->hasfile('picture1')) {
            $image1 = $request->file('picture1');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $user->picture1 = 'images/' . $name;
        }
        if ($request->hasfile('picture2')) {
            $image1 = $request->file('picture2');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $user->picture2 = 'images/' . $name;
        }
        if ($request->hasfile('picture3')) {
            $image1 = $request->file('picture3');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $user->picture3 = 'images/' . $name;
        }
        if ($request->hasfile('picture4')) {
            $image1 = $request->file('picture4');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $user->picture4 = 'images/' . $name;
        }
        if ($request->hasfile('picture5')) {
            $image1 = $request->file('picture5');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $user->picture5 = 'images/' . $name;
        }
        $user->save();

        $notification = array(
            'messege' => 'Sport Update Successfully!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
