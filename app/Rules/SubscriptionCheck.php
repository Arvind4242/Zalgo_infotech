<?php

namespace App\Rules;

use Auth;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Carbon;

class SubscriptionCheck implements ValidationRule
{
    /**
     * Run the validation rule.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $existingSubscription = Auth::user()->subscriptions()
            ->where('category_id', $value)
            ->where('expire_at', '>', Carbon::now())
            ->first();

        if ($existingSubscription) {
            $fail('You are already subscribed to this category.');
        }
    }
}
