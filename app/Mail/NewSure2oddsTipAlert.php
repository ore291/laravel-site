<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Modules\Predictions\Entities\Prediction;

class NewSure2oddsTipAlert extends Mailable
{
    use Queueable, SerializesModels;

    /**
    * The event instance.
    *
    * @var Modules\Predictions\Entities\Prediction
    */
   public $event;

   /**
    * Create a new message instance.
    *
    * @param   Modules\Predictions\Entities\Prediction  $event
    * @return void
    */
   public function __construct(Prediction $event)
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
       return $this->view('email.two');
   }
}
