<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HamburgerMenu extends Settings
{
    public array $menu;

    public static function group(): string
    {
        return 'hamburger';
    }
}
