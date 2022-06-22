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
        $user->country=$request->country;
        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $user->profile_picture = 'images/' . $name;
        }
        dd($user);
        $user->picture1=$request->picture1;
        $user->picture2=$request->picture2;
        $user->picture3=$request->picture3;
        $user->picture4=$request->picture4;
        $user->picture5=$request->picture5;
        $user->save();

    return redirect()->back();
    }
}
