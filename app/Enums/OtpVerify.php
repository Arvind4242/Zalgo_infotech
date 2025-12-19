<?php

namespace App\Enums;

use ReflectionClass;

enum OtpVerify: string
{
    const EMAIL = 'email';

    const MOBILE = 'mobile';

    public static function values(): array
    {
        $reflectionClass = new ReflectionClass(self::class);

        return array_values($reflectionClass->getConstants());
    }
}
