<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubscribeFormRequest extends FormRequest
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
        $user = \Auth::user();
        $subscriptions = $user->subscriptions()->where('status', 'active')->count();
        $this->merge([
            'free_trial_threshold' => 0,
            'free_trial_available' => 0,
        ]);
        if ($subscriptions != 0 && $this->free_trial) {
            $this->merge([
                'free_trial_threshold' => 1,
            ]);
        }

        if (! $user->free_trial_available && $this->free_trial) {
            $this->merge([
                'free_trial_available' => 1,
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     */
public function rules(): array
{
    $this->merge(['user_id' => Auth::id()]);

    return [
        'package_id' => ['required', 'integer', Rule::exists('packages', 'id')],
        'is_free_trial' => ['required', 'boolean'],
        'price' => ['required', 'numeric', 'min:0'],
        'business_type_ids' => ['required', 'array', 'min:1'],
        'business_type_ids.*' => ['required', 'integer', Rule::exists('business_types', 'id')],
        'business_type_group_id' => ['nullable', 'integer', Rule::exists('business_type_groups', 'id')],
    ];
}

    public function messages()
    {
        return [
            'free_trial_threshold.in' => 'Free trial can not be used as already having subscription',
            'free_trial_available.in' => 'Free trail has been already used',
        ];
    }
}
