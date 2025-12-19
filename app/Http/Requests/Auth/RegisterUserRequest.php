<?php

namespace App\Http\Requests\Auth;

use App\Enums\OtpVerify;
use App\Enums\OtpVerifyModel;
use App\Rules\ContactRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // No need for authorization check for user registration
    }

    public function prepareForValidation()
{
   if ($this->filled('contact')) {
        if (filter_var($this->input('contact'), FILTER_VALIDATE_EMAIL)) {
            $this->merge(['email' => $this->input('contact')]);
        }
        else
       if (preg_match('/^\+?[1-9]\d{1,14}$/', $this->input('contact'))) {
           $mobile = ltrim($this->input('contact'), '+');
           $this->merge(['mobile' => $mobile]);
        }
    }
}


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    // public function rules()
    // {
    //     $rules = [
    //         'name' => 'required|string|min:5|max:30',
    //         'password' => 'required|string|min:8|max:255|confirmed',
    //     ];

    //     // if (filter_var($this->input('contact'), FILTER_VALIDATE_EMAIL)) {
    //     $rules['email'] = ['required', 'string', 'email', 'max:40', 'unique:users', Rule::exists('otp_verifies', 'contact')
    //         ->where('is_verified', true)
    //         ->where('type', OtpVerify::EMAIL)
    //         ->whereIn('model', [OtpVerifyModel::USER, OtpVerifyModel::PROFILE])];
    //     // } elseif (preg_match('/^\+?[1-9]\d{1,14}$/', $this->input('contact'))) {
    //     $rules['mobile'] = ['required', 'string', 'min:10', 'max:14', 'unique:users', Rule::exists('otp_verifies', 'contact')
    //         ->where('is_verified', true)
    //         ->where('type', OtpVerify::MOBILE)
    //         ->whereIn('model', [OtpVerifyModel::USER, OtpVerifyModel::PROFILE])];
    //     // } else {
    //     //     // $rules['contact'] = ['required', 'string', 'max:40', new ContactRule];
    //     // }

    //     return $rules;
    // }

   

    public function rules()
    {
        $rules = [
            'name' => 'required|string|min:5|max:30',
            'password' => 'required|string|min:8|max:255|confirmed',
        ];
    
        // Determine which field to validate
        if ($this->filled('email') && !$this->filled('mobile')) {
            // Validate email only
            $rules['email'] = [
                'required_without:mobile',
                'string',
                'email',
                'max:40',
                'unique:users',
                Rule::exists('otp_verifies', 'contact')
                    ->where('is_verified', true) // Ensure the email is verified
                    ->where('type', OtpVerify::EMAIL)
                    ->whereIn('model', [OtpVerifyModel::USER, OtpVerifyModel::PROFILE]),
            ];
        } elseif ($this->filled('mobile') && !$this->filled('email')) {
            // Validate mobile only
            $rules['mobile'] = [
                'required_without:email',
                'string',
                'regex:/^\+?[1-9]\d{1,14}$/',
                'max:14',
                'unique:users',
                Rule::exists('otp_verifies', 'contact')
                    ->where('is_verified', true) // Ensure the mobile is verified
                    ->where('type', OtpVerify::MOBILE)
                    ->whereIn('model', [OtpVerifyModel::USER, OtpVerifyModel::PROFILE]),
            ];
        } else {
            // Enforce validation failure if both are filled
            $rules['email_or_mobile'] = [
                function ($attribute, $value, $fail) {
                    $fail('You must provide only one verified contact: either email or mobile.');
                },
            ];
        }
    
        return $rules;
    }
    
    


}
