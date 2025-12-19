<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ApiSettings extends Settings
{
    public string $sendy_api_key;

    public string $sendy_api_list_id;

    public string $sendy_api_subscribe_url;

    public static function group(): string
    {
        return 'api';
    }
}
