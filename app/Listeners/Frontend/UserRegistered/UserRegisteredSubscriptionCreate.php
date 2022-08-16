<?php

namespace App\Listeners\Frontend\UserRegistered;

use App\Models\Plan;
use App\Models\Subscription;
use Carbon\Carbon;
use App\Events\Frontend\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserRegisteredSubscriptionCreate implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Frontend\UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $user = $event->user;

        $userSub = new Subscription();

        $plan = Plan::findOrFail(1);

        $userSub->user_id = $user->id;
        $userSub->plan_id = 1;
        $userSub->plan_name = $plan->name;
        $userSub->start_date = Carbon::now();
        $userSub->end_date = new Carbon('first day of January 2050');

        $userSub->save();

    }
}
