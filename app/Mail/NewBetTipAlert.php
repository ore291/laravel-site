<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Modules\Live\Entities\LiveEvents;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewBetTipAlert extends Mailable
{
    use Queueable, SerializesModels;

     /**
     * The event instance.
     *
     * @var Modules\Live\Entities\LiveEvents
     */
    public $event;

    /**
     * Create a new message instance.
     *
     * @param  Modules\Live\Entities\LiveEvents  $event
     * @return void
     */
    public function __construct(LiveEvents $event)
    {
        $this->event = $event;
    }





    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.newpred');
    }
}
