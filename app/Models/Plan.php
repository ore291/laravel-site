<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Akaunting\Money\Money;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['name','n_only','sms_plan', 'n_weekly', 'n_per_month', 'n_per_6months', 'd_per_month', 'd_per_6months', 'd_per_year', 'k_per_month', 'k_per_6months', 'k_per_year'];

    //  /**
    //  * format currency.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Casts\Attribute
    //  */
    // protected function nPerMonth(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => Money::NGN($value, true),
    //     );
    // }
    //  /**
    //  * format currency.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Casts\Attribute
    //  */
    // protected function nPer6months(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => Money::NGN($value, true),
    //     );
    // }
    //  /**
    //  * format currency.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Casts\Attribute
    //  */
    // protected function nPerYear(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => Money::NGN($value, true),
    //     );
    // }
    //  /**
    //  * format currency.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Casts\Attribute
    //  */
    // protected function dPerMonth(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => Money::USD($value, true),
    //     );
    // }
    //  /**
    //  * format currency.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Casts\Attribute
    //  */
    // protected function dPer6months(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => Money::USD($value, true),
    //     );
    // }
    //  /**
    //  * format currency.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Casts\Attribute
    //  */
    // protected function dPerYear(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => Money::USD($value, true),
    //     );
    // }
    //  /**
    //  * format currency.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Casts\Attribute
    //  */
    // protected function kPerMonth(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => Money::KES($value, true),
    //     );
    // }
    //  /**
    //  * format currency.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Casts\Attribute
    //  */
    // protected function kPer6months(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => Money::KES($value, true),
    //     );
    // }
    //  /**
    //  * format currency.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Casts\Attribute
    //  */
    // protected function kPerYear(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => Money::KES($value, true),
    //     );
    // }
}
