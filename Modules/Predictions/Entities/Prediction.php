<?php

namespace Modules\Predictions\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prediction extends Model
{
    use HasFactory;

    protected $fillable = ['country', 'league', 'team_a', 'team_b', 'tips', 'odds', 'date_t', 'time_t', 'score_a', 'score_b', 'emblem', 'sport_id', 'category', 'plan_id'];
    
  
}
