<?php

namespace App\Enums;

use ReflectionClass;

enum IntrestedContact: string
{
    const ADVERTISEMENT = 'Advertisement';

    const EVENT_PROMOTION = 'Event Promotion';

    const BRAND_PROMOTION = 'Brand Promotion';

    const OTHERS = 'Others';

    public static function values(): array
    {
        $reflectionClass = new ReflectionClass(self::class);

        return array_values($reflectionClass->getConstants());
    }
}
