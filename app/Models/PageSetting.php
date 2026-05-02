<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSetting extends Model
{
    protected $fillable = [
        'page_key',
        'page_name',
        'meta_title',
        'meta_description',
        'focus_keyword',
        'keywords',
    ];

    public static function forRoute(string $routeName): ?self
    {
        return static::where('page_key', $routeName)->first();
    }
}
