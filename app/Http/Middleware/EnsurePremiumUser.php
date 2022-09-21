<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Modules\Results\Entities\Stats;
use Illuminate\Support\Facades\Auth;


class EnsurePremiumUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $id = auth()->user()->id;
        $userSub = Subscription::where('user_id', $id)->whereIn('plan_id', [1, 2, 3, 4])->first();
        $today = Carbon::today();
        $plans = Stats::whereStrict('name', 'plans')->first();

        $plans_array = array(1);

        if(isset($plans)){
               $plans_array = explode(',', $plans->value);
        }
     

        if (in_array($userSub->plan_id, $plans_array)  && $today->between($userSub->start_date, $userSub->end_date)) {
            return $next($request);
        } else {
            return redirect('/payment');
        }
    }
}
