<?php

namespace Modules\Predictions\Entities;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tier', 'sport','sport_name', 'plan_name', ];


     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sport_category';

    public function predictions()
    {
        return $this->hasMany(Prediction::class, "category");
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'tier');
    }
    
    // protected static function newFactory()
    // {
    //     return \Modules\$MODULE$\Database\factories\CategoryFactory::new();
    // }
}
