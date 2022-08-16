<?php

namespace Modules\Predictions\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tier', 'sport','sport_name', 'plan_name'];


     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sport_category';
    
    // protected static function newFactory()
    // {
    //     return \Modules\$MODULE$\Database\factories\CategoryFactory::new();
    // }
}
