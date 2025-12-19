<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TransformsRequest;

class ConvertStringBooleans extends TransformsRequest
{
    protected function transform($key, $value)
    {
        if (preg_match('/^(true)$/', $value)) {
            return true;
        }

        if (preg_match('/^(false)$/', $value)) {
            return false;
        }

        return $value;
    }
}
