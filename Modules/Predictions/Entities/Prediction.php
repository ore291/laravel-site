<?php

namespace Modules\Predictions\Entities;

use App\Models\League;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prediction extends Model
{
    use HasFactory;

    protected $fillable = ['country', 'league', 'team_a', 'team_b', 'tips', 'odds', 'date_t', 'time_t', 'score_a', 'score_b', 'emblem', 'sport_id', 'category', 'plan_id', 'sport_name', 'status'];
    
    /**
     * Get the league that owns the prediction.
     */
    public function leag()
    {
        return $this->belongsTo(League::class, 'league');
    }
    /**
     * Get the league that owns the prediction.
     */
    public function cat()
    {
        return $this->belongsTo(Category::class, 'category');
    }

}

