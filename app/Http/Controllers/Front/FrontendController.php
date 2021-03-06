<?php

namespace App\Http\Controllers\Front;

use App\About;
use App\Activity;
use App\Blog;
use App\Country;
use App\Feature;
use App\Http\Controllers\Controller;
use App\MatchProfile;
use App\Participant;
use App\Photo;
use App\Setting;
use App\Slider;
use App\Subscription;
use App\Plan;
use App\User;
use App\Question;
use App\UserSubscription;
use App\Work;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;


class FrontendController extends Controller
{
    public function index(){
        $work = Work::first();
        $setting = Setting::all();
        $slide=Slider::first();
        $about=About::first();
        $users = User::where('role', '1')->get();
        $blog = Blog::orderBy('updated_at','desc')->limit(3)->get();
        return view('front.pages.index', compact('about','slide','users','work', 'blog','setting'));
    }

    public function feature(){
        $feature = Feature::find(1);
        return view('front.pages.function',compact('feature'));
    }
    public function profiles(){

        $match = MatchProfile::where('user_id','=',Auth::user()->id)->pluck('users_id')->toArray();
        $users = User::where('role', '1')->where('country', '!=', Auth::user()->country)->where('id', '!=', Auth::user()->id)->get();
        return view('front.dashboard.profiles', compact('users','match'));
    }
    public function profile($id){
        $idd = base64_decode($id);
        $user = User::find($idd);
        $question = Question::all();
        $post = Photo::latest()->get();
        return view('front.dashboard.profile', compact('user','question','post'));
    }

    public function dashboard(){

        $activities = Activity::all();

        return view('front.dashboard.index', compact('activities'));
    }
    public function activityCreate(){
        $country=Country::all();
        return view('front.dashboard.activityCreate', compact('country'));
    }
    public function activityedit($id){
        $id = base64_decode($id);
        $editactive=Activity::find($id);
        return view('front.dashboard.activityedit', compact('editactive'));
    }
    public function activityUpdate(Request $request,$id){
        $id = base64_decode($id);
        $active=Activity::find($id);
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
        $active->start_time = $request->start_time;
        $active->end_time = $request->end_time;
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
        $active->price=$request->price;
        $active->phone=$request->phone;
        $active->update();
       $notification = array(
           'messege' => 'Successfully Update a activity',
           'alert-type' => 'success'
       );
        return redirect()->back()->with($notification);
    }
    public function myactivity(){
        $authactivity=Activity::where('user_id',Auth::user()->id)->get();

        return view('front.dashboard.myactivity',compact('authactivity'));
    }
    public function activity($id){
        $id = base64_decode($id);
        $users = User::where('role', '1')->get();
        $rating = Review::where('activity_id',$id)->get();
        $activity = Activity::find($id);
        $userss = User::where('country','=',Auth::user()->country)->get();
//   dd($userss);
        $showactivity = Review::where('activity_id',$id)->where('user_id', Auth::user()->id)->get();
        return view('front.dashboard.activity', compact('userss','activity','users','rating','showactivity'));
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
    public function activityDelete($id){
        $id = base64_decode($id);
        $activitie = Activity::find($id);
        $activitie->delete();
        $notification = array(
            'messege' => 'Activit?? supprim??e r??ussie!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);

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
        $active->start_time = $request->start_time;
        $active->end_time = $request->end_time;
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
        $active->price=$request->price;
        $active->phone=$request->phone;
        $active->save();
        $notification = array(
            'messege' => 'Successfully added a activity',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function subscriptions(){

        $subscriptions = Plan::all();
        if (Auth::user()){
            $subscriptionn = Plan::where('id','=' , Auth::user()->subscription)->first();
            return view('front.pages.subscriptions', compact('subscriptions','subscriptionn'));
        }
        return view('front.pages.subscriptions', compact('subscriptions'));
    }
    public function subscriptionPaymant($id){
        $user = Auth::user();
        $subscription = Plan::find($id);
        $intent = $user->createSetupIntent();
        return view('front.pages.subpaymant', compact('subscription','intent'));
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

        if($userSubscription->save()){
            $user->subscription = $id;
            $user->save();
        }

        $user->newSubscription('main', $userSubscription->key)
            ->create($userSubscription->paymentMethodId);


        $notification = array(
            'messege' => 'Successfully purchase a subscription',
            'alert-type' => 'success'
        );
        return redirect()->route('front.dashboard')->with($notification);
    }


    public function blogindex($id){
        $blog=Blog::find($id);
        return view('front.pages.blogindex',compact('blog'));
    }
    public function allposts(){
        $blog=Blog::all();
        return view('front.pages.allposts',compact('blog'));
    }
//public function ratingcreate(){
//    $user=User::where('role', '=', 1)->get();
//    return view('front.dashboard.activity',compact('user'));
//}


    public function rating(Request $request){
        $rating = new Review();
        $rating->user_id=Auth::user()->id;
        $rating->star=$request->star;
        $rating->comment=$request->comment;
        $rating->activity_id=$request->activity_id;
        $rating->save();
        $notification = array(
            'messege' => 'Envoyer un avis',
            'alert-type' => 'success'
        );
       return redirect()->back()->with($notification);

    }
    public function whoMyAcceptRequest(){
        $match = MatchProfile::where('users_id','=',Auth::user()->id)->where('status','=',0)->orderBy('created_at', 'desc')->pluck('user_id');
        $users = User::whereIn('id',$match)->get();
        return view('front.dashboard.myrequest',compact('users'));

    }
    public function iAcceptRequest(){
        $match = MatchProfile::where('user_id','=',Auth::user()->id)->where('status','=',0)->orderBy('created_at', 'desc')->pluck('users_id');
        $users = User::whereIn('id',$match)->get();
        return view('front.dashboard.myrequest',compact('users'));

    }
    public function iframChat(){
        return view('front.dashboard.iframe');
    }



}
