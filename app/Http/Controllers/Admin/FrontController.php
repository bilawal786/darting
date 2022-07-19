<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Plan;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function adminPlans()
    {
        $plans = Plan::all();
        return view('admin.plans.index', compact('plans'));
    }
    public function adminPlansEdit($id)
    {   $plan = Plan::find($id);
        return view('admin.plans.edit', compact('plan'));
    }
    public function adminPlansUpdate(Request $request,$id)
    {
        $plan = Plan::find($id);
        $plan->name = $request->name;
        $plan->plan = $request->plan;
        $plan->description = $request->description;
        $plan->update();
        $notification = array(
            'messege' => "Succès de l'abonnementMise à jour complète!",
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);

    }


}
