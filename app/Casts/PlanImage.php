<?php

namespace App\Casts;

use Spatie\LaravelSettings\SettingsCasts\SettingsCast;

class PlanImage implements SettingsCast
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get($payload)
    {
        return config('app.url').\Storage::url($payload);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set($value)
    {
        return $value;
    }
}
