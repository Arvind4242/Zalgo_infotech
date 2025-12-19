<?php

namespace App\Enums;

use ReflectionClass;

enum DisplayNumber: int
{
    case ZERO = 1; 
    case ONE = 2;   
    case TWO = 3;
    case THREE = 4; 

    // This method will return the display names for the UI
    public static function labels(): array
    {
        return [
            self::ZERO->value => 'Phone',
            self::ONE->value => 'Whatsapp no.',
            self::TWO->value => 'Mobile',
            self::THREE->value => 'Contact Person Phone'
        ];
    }

    // This method is for converting the enum to the UI label
    public static function getLabel(int $value): string
    {
        return self::labels()[$value] ?? 'Unknown';
    }
}



