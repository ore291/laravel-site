<?php

namespace App\Listeners;


use Carbon\Carbon;
use App\Events\TipPostEvent;
use App\Models\Subscription;
use App\Mail\NewLiveBetTipAlert;
use App\Mail\NewSure2oddsTipAlert;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendTipsLister implements ShouldQueue
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
     * @param  \App\Events\TipPostEvent  $event
     * @return void
     */
    public function handle(TipPostEvent $event)
    {
        // $emails = ['oreoluwapadonu@gmail.com', 'oreoluwapadonu51@gmail.com'];

        $subs = Subscription::whereIn('plan_id', [2, 3, 4])->whereDate('end_date', '>=', Carbon::now())->with('user')->get();




        $subs = $subs->toArray();

        foreach ($subs as $sub) {
            if (isset($sub['user']['email_verified_at'])) {
                if(isset($event->prediction->live_streaming_link )){
                     Mail::to($sub['user']['email'])->queue(new NewLiveBetTipAlert($event->prediction));
                }else{
                    Mail::to($sub['user']['email'])->queue(new NewSure2oddsTipAlert($event->prediction));
                }
               
            }
        }
    }
}
