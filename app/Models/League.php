<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Predictions\Entities\Prediction;
use Illuminate\Database\Eloquent\Casts\Attribute;

class League extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'country_short', 'code', 'emblem', 'country'];

    public function predictions()
    {
        return $this->hasMany(Prediction::class, "league");
    }


    // public function getShortAttribute()
    // {
    //     return '(' . $this->country_short . ' ' . $this->name . ')';
    // }

    /**
     * Interact with the user's address.
     *
     * @return  \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function short(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => '( ' . strtoupper(substr($attributes['country'],0,3)) . ' )' . ' ' . $attributes['name'] ,
        );
    }
}
