<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request){
        dd($request);
        $rating = new Review();
        $rating->star=$request->star;
        $rating->save();
        $notification = array(
            'messege' => 'Successfully purchase a subscription',
            'alert-type' => 'success'
        );
       return redirect()->route('activity.rating');

    }

}
