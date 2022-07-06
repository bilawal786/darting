<?php

namespace App\Http\Controllers\Front;

use App\Activity;
use App\Http\Controllers\Controller;
use App\Participant;
use App\Subscription;
use App\Plan;
use App\User;
use App\Question;
use App\UserSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FrontendController extends Controller
{
    public function index(){
        $users = User::where('role', '1')->get();
        return view('front.pages.index', compact('users'));
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
        $question = Question::all();
        return view('front.dashboard.profile', compact('user','question'));
    }
    public function dashboard(){
        $activities = Activity::all();
        return view('front.dashboard.index', compact('activities'));
    }
    public function activityCreate(){
        return view('front.dashboard.activityCreate');
    }
    public function activity($id){
        $id = base64_decode($id);
        $activity = Activity::find($id);
        return view('front.dashboard.activity', compact('activity'));
    }
    public function myProfile(){
        $user= Auth::user();
        $question = Question::all();
        return view('front.dashboard.myProfile', compact('user','question'));
    }
    public function notification(){
        $user= Auth::user();
        return view('front.dashboard.notification', compact('user'));
    }
    public function activityApply($id){
        $check = Participant::where('activity_id', $id)->where('user_id', Auth::user()->id)->first();
        if ($check){
            $notification = array(
                'messege' => 'Already applied !',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }else{
            $particpant = new Participant();
            $particpant->activity_id = $id;
            $particpant->user_id = Auth::user()->id;
            $particpant->save();
            $notification = array(
                'messege' => 'Successfully applied as participant',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }


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
        $active->user_id = Auth::user()->id;
        $active->min_age = $request->min_age;
        $active->max_age = $request->max_age;
        $active->date = $request->date;
        $active->city = $request->city;
        $active->num = $request->num;
        $active->type = $request->type;
        $active->activity_type = $request->activity_type;
        $active->activity_subtype = $request->activity_subtype;
        $active->description = $request->description;
        $active->save();
        $notification = array(
            'messege' => 'Successfully added a activity',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function subscriptions(){
        $user = Auth::user();
        $subscriptions = Plan::all();
        $intent = $user->createSetupIntent();
        return view('front.pages.subscriptions', compact('subscriptions','intent'));
    }
    public function subscriptionBuy(Request $request,$id){
        $user= Auth::user();
        $userSubscription = new UserSubscription();
        $userSubscription->user_id = $user->id;
        $userSubscription->subscription_id = $id;
        $userSubscription->price = $request->price;
        $userSubscription->key = $request->key;
        $userSubscription->card_holder_name = $request->card_holder_name;
        $userSubscription->paymentMethodId = $request->paymentMethodId;
        $userSubscription->save();

        $user->newSubscription('main', $userSubscription->key)
            ->create($userSubscription->paymentMethodId);

       
        $notification = array(
            'messege' => 'Successfully purchase a subscription',
            'alert-type' => 'success'
        );
        return redirect()->route('front.dashboard')->with($notification);
    }

}
