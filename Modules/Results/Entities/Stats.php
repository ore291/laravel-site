<?php

namespace Modules\Results\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stats extends Model
{
    use HasFactory;

    protected $guarded = ['id'];  

    public static function add($key, $val)
    {
        if (self::has($key)) {
            return self::set($key, $val);
        }

        return self::create(['name' => $key, 'value' => $val, ]) ? $val : false;
    }

    public static function has($key)
    {
        return (bool) self::all()->whereStrict('name', $key)->count();
    }
    
    public static function set($key, $val)
    {
        if ($setting = self::all()->where('name', $key)->first()) {
            return $setting->update([
                'name' => $key,
                'value'  => $val,
                 ]) ? $val : false;
        }

        return self::add($key, $val);
    }

   
}
