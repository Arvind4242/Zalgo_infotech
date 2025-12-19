<?php

namespace App\Enums;

enum TransactionStatus: string
{
    case PENDING = 'pending';
    case COMPLETED = 'completed';
    case FAILED = 'failed';

    /**
     * Get all the values as an array.
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
