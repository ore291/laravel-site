<?php

namespace App\Listeners\Backend\UserCreated;

use App\Events\Backend\UserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserCreatedSubscriptionCreate
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
     * @param  \App\Events\Backend\UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        //
    }
}
