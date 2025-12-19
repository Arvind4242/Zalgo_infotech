<?php

namespace App\Casts;

use Spatie\LaravelSettings\SettingsCasts\SettingsCast;

class AdsImageUrlCast implements SettingsCast
{
    protected $baseUrl = 'https://your-image-hosting.com/';

    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get($payload)
    {
        foreach ($payload as &$ad) {
            if (! $ad['show']) {
                return [];
            }
            if (isset($ad['image'])) {
                $ad['image'] = config('app.url').\Storage::url($ad['image']);
            }
        }

        return $payload;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set($value): mixed
    {
        return $value;
    }
}
