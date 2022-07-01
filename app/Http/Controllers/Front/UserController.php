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
        if ($request->fname){
            $user->fname=$request->fname;
        }
        if ($request->lname){
            $user->lname=$request->lname;
        }
       if ($request->phone){
           $user->phone=$request->phone;
       }
       if ($request->city){
           $user->city=$request->city;
       }
        if ($request->country){
            $user->country=$request->country;
        }
        if ($request->description){
            $user->about=$request->description;
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
        if ($request->question1){
            $user->question1 = $request->question1;
        }
        if ($request->question2){
            $user->question2 = $request->question2;
        }
        if ($request->question3){
            $user->question3 = $request->question3;
        }
        if ($request->question4){
            $user->question4 = $request->question4;
        }
        if ($request->question5){
            $user->question5 = $request->question5;
        }
        if ($request->question6){
            $user->question6 = $request->question6;
        }
        if ($request->question7){
            $user->question7 = $request->question7;
        }
        if ($request->question8){
            $user->question8 = $request->question8;
        }
        if ($request->question9){
            $user->question9 = $request->question9;
        }
        if ($request->question10){
            $user->question10 = $request->question10;
        }
        $user->save();

        $notification = array(
            'messege' => 'Successfully Updated!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function profileImage(Request $request){
        $user=Auth::user();
        if ($request->hasfile('profileImage')) {
            $image1 = $request->file('profileImage');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $user->profile_picture = 'images/' . $name;
        }
        if ($request->hasfile('coverImage')) {
            $image1 = $request->file('coverImage');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $user->picture1 = 'images/' . $name;
        }
        $user->save();

        $notification = array(
            'messege' => 'Successfully Updated!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
