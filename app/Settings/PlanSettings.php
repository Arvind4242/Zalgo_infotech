<?php

namespace App\Settings;

use App\Casts\PlanImage;
use Spatie\LaravelSettings\Settings;

class PlanSettings extends Settings
{
    public string $title;

    public string $description;

    public string $image;

    public array $features;

    public static function group(): string
    {
        return 'plan';
    }

    public static function casts(): array
    {
        if (request()->route()->getName() != 'filament.admin.pages.manage-plan') {

            return [
                'image' => PlanImage::class,
            ];
        }

        return [];
    }
}
