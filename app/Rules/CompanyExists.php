<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;

class CompanyExists implements ValidationRule
{
    /**
     * Run the validation rule.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $existingSubscription = Auth::user()->company()->verificationRequest()
            ->count();

        if ($existingSubscription > 0) {
            $fail('You are already requested for verification.');
        }
    }
}
