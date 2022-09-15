<?php

namespace Modules\Results\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Results extends Model
{
    use HasFactory;

    protected $fillable = ['status','date', 'updated_at','created_at', 'time'];
    
    
}
