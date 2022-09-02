<?php

namespace Modules\Live\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LiveEvents extends Model
{
    use HasFactory;

    protected $fillable = ['event', 'booking_no', 'live_streaming_link', 'time', 'created_at', 'updated_at'];
    
   
}
