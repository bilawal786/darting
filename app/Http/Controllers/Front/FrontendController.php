<?php

namespace App\Http\Controllers\Front;

use App\Activity;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        return view('front.pages.index');
    }
    public function function(){
        return view('front.pages.function');
    }
    public function profiles(){
        $users = User::where('role', '1')->where('id', '!=', Auth::user()->id)->get();
        return view('front.dashboard.profiles', compact('users'));
    }
    public function profile($id){
        $idd = base64_decode($id);
        $user = User::find($idd);
        return view('front.dashboard.profile', compact('user'));
    }
    public function dashboard(){
        return view('front.dashboard.index');
    }
    public function activityCreate(){
        return view('front.dashboard.activityCreate');
    }
    public function activity(){
        return view('front.dashboard.activity');
    }
    public function myProfile(){
        $user= Auth::user();
        return view('front.dashboard.myProfile', compact('user'));
    }
    public function notification(){
        $user= Auth::user();
        return view('front.dashboard.notification', compact('user'));
    }
    public function activityStore(Request $request)
    {
        $active = new Activity();
        if ($request->sortie){
            foreach($request->sortie as $name)
            {
                $data4[]=$name;

                $active->sortie=json_encode($data4);
            }
        }

        if ($request->diver){
            foreach($request->diver as $diver)
            {
                $data1[]=$diver;
                $active->diver=json_encode($data1);
            }
        }

        if ($request->game){
            foreach($request->game as $name)
            {
                $data2[]=$name;
                $active->game=json_encode($data2);
            }
        }
        if ($request->sport){
            foreach($request->sport as $name)
            {

                $data3[]=$name;
                $active->sport=json_encode($data3);
            }
        }

        $active->title = $request->title;
        $active->time = $request->time;
        $active->country = $request->country;
        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $active->image = 'images/' . $name;
        }
        $active->min_age = $request->min_age;
        $active->max_age = $request->max_age;
        $active->date = $request->date;
        $active->city = $request->city;
        $active->num = $request->num;
        $active->type = $request->type;
        $active->description = $request->description;
        $active->save();
        return redirect()->back();
    }

}
