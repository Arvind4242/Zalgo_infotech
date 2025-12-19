<?php

namespace App\Enums;

use ReflectionClass;

enum SubscriptionStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case PENDING = 'pending';
    case CANCELLED = 'cancelled';
    case EXPIRED = 'expired';
    case ABOUT_EXPIRE = 'about_expire';

    // Define a label for each case
    public function label(): string
    {
        return match ($this) {
            self::ACTIVE => 'Active',
            self::INACTIVE => 'Inactive',
            self::PENDING => 'Pending',
            self::CANCELLED => 'Cancelled',
            self::EXPIRED => 'Expired',
            self::ABOUT_EXPIRE => 'About to Expire',
        };
    }

    // Generate options for dropdown
    public static function options(): array
    {
        return array_combine(
            array_map(fn ($case) => $case->value, self::cases()),
            array_map(fn ($case) => $case->label(), self::cases())
        );
    }
}
