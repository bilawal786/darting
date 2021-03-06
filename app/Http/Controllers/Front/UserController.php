<?php

namespace App\Http\Controllers\Front;

use App\Activity;
use App\Comments;
use App\Divers;

use App\Jeux;
use App\Like;
use App\MatchProfile;
use App\Photo;
use App\Plan;
use App\Question;
use App\Sorties;
use App\Sport;
use App\Subscription;
use App\User;
use App\UserSubscription;
use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller

{
    public function countryupdate($id){

        $activities = Activity::where('country','=',$id)->get();
        return view('front.dashboard.index',compact('activities'));

    }
    public function update(Request $request)
    {

        $user = Auth::user();
        if ($request->fname) {
            $user->fname = $request->fname;
        }
        if ($request->lname) {
            $user->lname = $request->lname;
        }
        if ($request->phone) {
            $user->phone = $request->phone;
        }
        if ($request->city) {
            $user->city = $request->city;
        }
        if ($request->country) {
            $user->country = $request->country;
        }
        if ($request->gender) {
            $user->gender = $request->gender;
        }
        if ($request->description) {
            $user->about = $request->description;
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
        if ($request->question1) {
            $user->question1 = $request->question1;
        }
        if ($request->question2) {
            $user->question2 = $request->question2;
        }
        if ($request->question3) {
            $user->question3 = $request->question3;
        }
        if ($request->question4) {
            $user->question4 = $request->question4;
        }
        if ($request->question5) {
            $user->question5 = $request->question5;
        }
        if ($request->question6) {
            $user->question6 = $request->question6;
        }
        if ($request->question7) {
            $user->question7 = $request->question7;
        }
        if ($request->question8) {
            $user->question8 = $request->question8;
        }
        if ($request->question9) {
            $user->question9 = $request->question9;
        }
        if ($request->question10) {
            $user->question10 = $request->question10;
        }
        $user->save();

        $notification = array(
            'messege' => 'Mise ?? jour r??ussie!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function profileImage(Request $request)
    {
        $user = Auth::user();
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
            'messege' => 'Mise ?? jour r??ussie!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function imagePost(Request $request)
    {
        $request->validate([
            'file'  => 'mimes:mp4,mov,ogg,qt | max:9000'
        ]);
//        $file->request->file('image');
//        $file->move('upload',$file->getClientOrignalName());
//        $imagen=$file->getClientOrignalName();

        $image = new Photo();
        $image->user_id = Auth::user()->id;
        $image->description = $request->description;

        if ($request->hasfile('image')) {

            $image1 = $request->file('image');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();

            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $image->image = 'images/' . $name;

        }
//        $image->image=$imagen;

        $image->save();
        $notification = array(
            'messege' => 'Article ajout?? avec succ??s!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function postUpdate(Request $request,$id)
    {

        $image = Photo::find($id);
        $image->description = $request->description;
        if ($request->hasfile('image')) {
            dd($request->file('image') );
            $image1 = $request->file('image');
            $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image1->move($destinationPath, $name);
            $image->image = 'images/' . $name;

        }
        $image->update();

        $notification = array(
            'messege' => 'Article ajout?? avec succ??s!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function postDelete($id)
    {
        $image = Photo::find($id);
        $image->delete();
        $notification = array(
            'messege' => 'Supprimer le message avec succ??s!',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);
    }
    public function index()
    {
        $user = User::where('role', '=', 1)->get();
        return view('admin.users.index', compact('user'));

    }

    public function userview($id)
    {
        $question = Question::all();
        $user = User::find($id);
        $plans=UserSubscription::find($id);
        $plan=Plan::find($id);
        $activiety=Activity::where('user_id','=',$id)->get();
        $juex = Jeux::all();
        $divers = Divers::all();
        $sports = Sport::all();
        $sortie = Sorties::all();
        return view('admin.users.userview', compact('user','activiety' ,'plan' ,'plans','sortie', 'juex', 'divers', 'sports', 'question'));
    }
    public function userviewdelete($id){
        $userview=Activity::find($id);
        $userview->delete();
        $notification = array(
            'messege' => 'Supprimer le message avec succ??s!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    public function liker($id)
    {

        $check = Like::where('post_id', '=', $id)->where('user_id', '=', Auth::user()->id)->first();
        if (!$check) {
            $like = new Like();
            $like->user_id = Auth::user()->id;
            $like->post_id = $id;
            $like->save();
        }
        else{
            $check->is_dislike = 0;
            $check->update();
        }
        $count = Like::where('post_id', '=', $id)->where('is_dislike','=',0)->count();
        return response()->json(['success' => $count]);
    }
    public function unLiker($id)
    {
        $ulike = Like::where('post_id', '=', $id)->where('user_id', '=', Auth::user()->id)->first();
        $ulike->is_dislike = 1;
        $ulike->update();
        $count = Like::where('post_id', '=', $id)->where('is_dislike','=',0)->count();
        return response()->json(['success' => $count]);
    }
    public function singlePost($id)
    {
        $post = Photo::find($id);
        $comment = Comments::where('post_id', '=', $id)->where('post_id','=',$id)->get();
        return view('front.dashboard.singlepost',compact('post','comment'));
    }
    public function postComment(Request $request)
    {
        $comment = new Comments();
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $request->post_id;
        $comment->comment = $request->comment;
        $comment->save();

        $notification = array(
            'messege' => 'Commentaire ajout?? avec succ??s!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);



    }
    public function deleteComment($id)
    { $com = Comments::find($id);
        $com->delete();
        $notification = array(
            'messege' => 'Commentaire supprim?? avec succ??s!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);

    }
    public function userMatch($id,$status)
    {  $match = new MatchProfile();
        $match->users_id = $id;
        $match->user_id = Auth::user()->id;
        $match->status = $status;
        $match->save();
        return response()->json(['success' => '1']);
    }


}
