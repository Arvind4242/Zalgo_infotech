<?php

namespace App\Enums;

use ReflectionClass;

enum OtpVerifyModel: string
{
    const USER = 'user';

    const COMPANY = 'company';

    const PROFILE = 'profile';

    public static function values(): array
    {
        $reflectionClass = new ReflectionClass(self::class);

        return array_values($reflectionClass->getConstants());
    }
}
