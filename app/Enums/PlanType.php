<?php

namespace App\Enums;

use ReflectionClass;

enum PlanType: string
{
    const YEARLY = 'Yearly';

    const MONTHLY = 'Monthly';

    public static function values(): array
    {
        $reflectionClass = new ReflectionClass(self::class);

        return array_values($reflectionClass->getConstants());
    }
}
