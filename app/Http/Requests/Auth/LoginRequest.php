<?php

namespace App\Http\Requests\Auth;

use App\Rules\ContactRule;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {

        return true;
    }

    public function prepareForValidation()
    {
        if (filter_var($this->contact, FILTER_VALIDATE_EMAIL)) {
            $this->merge([
                'email' => $this->contact,
            ]);
        } elseif (preg_match('/^\+?[1-9]\d{1,14}$/', $this->contact)) {
            $this->merge([
                'mobile' => $this->contact,
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $rules = [];
        if (filter_var($this->contact, FILTER_VALIDATE_EMAIL)) {
            $rules['email'] = ['required', 'string', 'email', 'max:40', 'exists:users'];
        } elseif (preg_match('/^\+?[1-9]\d{1,14}$/', $this->contact)) {
            $rules['mobile'] = ['required', 'string', 'min:10', 'max:14', 'exists:users'];
        } else {
            $rules['contact'] = ['required', 'string', 'max:40', new ContactRule];
        }
        $rules['password'] = ['required', 'string'];

        return $rules;
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();
        $contact = 'mobile';
        if (filter_var($this->contact, FILTER_VALIDATE_EMAIL)) {
            $contact = 'email';
        }
        if (! Auth::attempt($this->only($contact, 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        $contact = 'mobile';
        if (filter_var($this->contact, FILTER_VALIDATE_EMAIL)) {
            $contact = 'email';
        }

        return Str::transliterate(Str::lower($this->input($contact)).'|'.$this->ip());
    }
}
