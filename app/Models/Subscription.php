<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscription extends Model
{
    use HasFactory;

      /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    // /**
    //  * Get the user of a UserProvider.
    //  */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // /**
    //  * Get the user's first name.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Casts\Attribute
    //  */
    // protected function userId(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => User::find($value),
    //     );
    // }
}
