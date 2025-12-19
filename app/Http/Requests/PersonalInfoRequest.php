<?php

namespace App\Http\Requests;

use App\Enums\OtpVerify;
use App\Enums\OtpVerifyModel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PersonalInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:30',
            'email' => [
                'email',
                Rule::unique('users')->ignore(\Auth::user()->id),
                Rule::exists('otp_verifies', 'contact')
                    ->where('is_verified', true)
                    ->where('type', OtpVerify::EMAIL)
                    ->whereIn('model', [OtpVerifyModel::USER, OtpVerifyModel::PROFILE]),
            ],
            'mobile' => [
                'string',
                Rule::unique('users')->ignore(\Auth::user()->id),
                Rule::exists('otp_verifies', 'contact')
                    ->where('is_verified', true)
                    ->where('type', OtpVerify::MOBILE)
                    ->whereIn('model', [OtpVerifyModel::USER, OtpVerifyModel::PROFILE]),
            ],

        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (empty($this->email) && empty($this->mobile)) {
                $validator->errors()->add('email', 'Either email or mobile is required.');
                $validator->errors()->add('mobile', 'Either email or mobile is required.');
            }
        });
    }
}
