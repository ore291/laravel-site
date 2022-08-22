<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Predictions\Entities\Prediction;

class League extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'country_short', 'code', 'emblem', 'country'];

    public function predictions()
    {
        return $this->hasMany(Prediction::class, "league");
    }


}
