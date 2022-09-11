<?php

namespace Modules\Live\Http\Controllers;

use Carbon\Carbon;
use App\Models\Plan;
use App\Authorizable;
use Laracasts\Flash\Flash;
use Illuminate\Support\Str;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Events\Backend\UserCreated;
use App\Events\Backend\UserUpdated;
use Illuminate\Support\Facades\Log;
use App\Notifications\UserAccountCreated;
use App\Events\Backend\UserProfileUpdated;
use Illuminate\Contracts\Support\Renderable;

class UpgradeController extends Controller
{
   

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Users';

        // module name
        $this->module_name = 'upgrade-user';

        // directory path of the module
        $this->module_path = 'upgrade';

        // module icon
        $this->module_icon = 'c-icon cil-people';

        // module model name, path
        $this->module_model = "App\Models\User";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $page_heading = ucfirst($module_title);
        $title = $page_heading.' '.ucfirst($module_action);

        $$module_name = $module_model::paginate();

    

        return view(
            "live::$module_path.index",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', 'page_heading', 'title')
        );
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        if (! auth()->user()->can('edit_users')) {
            abort(404);
        }

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit';

        $user = $module_model::findOrFail($id);

     

        $subs = $user->subscriptions;

        $plans = Plan::pluck('name', 'id');

       

        return view(
            "live::$module_path.edit",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', "user",'subs', 'plans')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

        if (! auth()->user()->can('edit_users')) {
            abort(404);
        }

        $plan_data = Plan::find($request->plan);

        $duration = Carbon::today();
        $message = "success";
        if ($request->duration === "w") {
            $duration = $duration->addWeek();
        } else if ($request->duration === "m") {
            $duration = $duration->addMonth();
        } else if ($request->duration === "6m") {
            $duration =  $duration->addMonths(6);
        } else if ($request->duration === "y") {
            $duration = $duration->addYear();
        }

        if ($request->plan  < 5) {
            $userSub = Subscription::where('user_id', $id)->whereIn('plan_id', [1, 2, 3, 4])->first();
            $userSub->plan_id = $request->plan;
            $userSub->plan_name =$plan_data->name;
            $userSub->start_date = Carbon::now();
            $userSub->end_date = $duration;

            $userSub->save();
        } else if ($request->plan === 6) {
            $userSub = Subscription::updateOrCreate(
                ['plan_id' => $request->plan , 'user_id' => $id],
                ['start_date' => Carbon::now(), 'end_date' => $duration, 'plan_name' => $plan_data->name]
            );
        } else {
            $userSub = Subscription::updateOrCreate(
                ['plan_id' => $request->plan, 'user_id' => $id],
                ['start_date' => Carbon::now(), 'end_date' =>  $duration, 'plan_name' => $plan_data->name]
            );
        }

       

        Flash::success("<i class='fas fa-check'></i> '".'Subscription'."' Updated Successfully")->important();

      

        return back();
    }

  
}
