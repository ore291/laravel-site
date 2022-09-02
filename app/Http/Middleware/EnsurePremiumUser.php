<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Models\Subscription;
use Illuminate\Http\Request;
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


        if ($userSub->plan_id > 1 && $today->between($userSub->start_date, $userSub->end_date) ) {

            return $next($request);
        } else {
            return redirect('/payment');
        }
    }
}
