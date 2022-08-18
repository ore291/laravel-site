<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Plan;
use App\Http\Resources\PlanResource;
use App\Models\Subscription;

class ApiController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     */
    public function plans(Request $request)
    {

        return PlanResource::collection(Plan::where("id", "!=", 1)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     */
    public function subs(Request $request, $id)
    {



        $userSub = Subscription::where('user_id', $id)->whereIn('plan_id', [1, 2, 3, 4])->first();
        $rolloverSub = Subscription::where('user_id', $id)->where('plan_id', 6)->first();
        $smsSub = Subscription::where('user_id', $id)->where('plan_id', 5)->first();

        $data = [
            "sub" => $userSub,
            "rollover" => $rolloverSub,
            "sms" => $smsSub,
        ];

        return $data;
    }
}
