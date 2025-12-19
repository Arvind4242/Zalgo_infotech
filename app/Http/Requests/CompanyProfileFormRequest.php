<?php

namespace App\Http\Requests;

use App\Enums\OtpVerify;
use App\Enums\OtpVerifyModel;
use App\Models\Company;
use Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CompanyProfileFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

protected function prepareForValidation()
{
    if ($this->method() === 'PUT') {
        $this->merge(['step' => $this->route('step', 1)]);
    }

    // If step 1 and logo is not a file, remove it
    if ($this->input('step') == 1) {
        if ($this->has('logo') && ! $this->file('logo')) {
            $this->request->remove('logo');
        }

        $company = Auth::user()->company();
        if ($company) {
            $this->merge([
                'company_count' => $company->count(),
            ]);
        }
    }
}


    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        if ($this->method() === 'PUT') {
            return $this->putRules();
        }

        return $this->postRules();
    }

    /**
     * Get the validation rules for PUT requests.
     */
    protected function putRules(): array
    {

        return match ((int) $this->input('step', 1)) {
            1 => $this->step1Rules(),
            2 => $this->step2Rules(),
            3 => $this->step3Rules(),
            4 => $this->step4Rules(),
            default => [],
        };
    }

    /**
     * Get the validation rules for POST requests.
     */
    protected function postRules(): array
    {
        $this->merge(['user_id' => Auth::user()->id]);

        return [
            'category_ids' => ['required', 'array', 'min:1'],
            'category_ids.*' => ['required', 'integer', Rule::exists('categories', 'id')->whereNull('parent_id')],
        ];
    }

    /**
     * Get the validation rules for step 1.
     */
    protected function step1Rules(): array
    {
        $user = Auth::user();
        $business_types_id = $user->subscriptions()->pluck('business_types.id');

        $rules = [
            'logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'owner_1' => ['required', 'string', 'min:3', 'max:30'],
            // 'owner_phone_1' => [
            //     'required',
            //     Rule::exists('otp_verifies', 'contact')
            //         ->where('is_verified', true)
            //         ->where('type', OtpVerify::MOBILE)
            //         ->where('model', OtpVerifyModel::COMPANY),
            // ],
            'brand' => ['required'],
            'business_types' => ['required', 'array', 'min:1'],
            'business_types.*' => [
                'required',
                'integer',
                Rule::exists('business_types', 'id'), // Allow any valid ID
            ],
            'categories' => ['required', 'array', 'min:1'],
           'categories.*' => [
                'required',
                'integer',
                Rule::exists('categories', 'id'),
            ],

            'summary' => ['required', 'string'],
            'company_count' => ['integer', 'in:0'],
        ];

        if (! $this->input('is_update', false)) {
            $rules['company_name'] = ['required',
                'string',
                'min:3',
                'max:30', 'unique:companies'];
            $rules['owner_2'] = ['sometimes', 'string', 'min:3', 'max:30'];
            // $rules['owner_phone_2'] = [
            //     'sometimes',
            //     Rule::exists('otp_verifies', 'contact')
            //         ->where('is_verified', true)
            //         ->where('type', OtpVerify::MOBILE)
            //         ->where('model', OtpVerifyModel::COMPANY),
            // ];
        } else {
            $rules['company_name'] = ['required',
                'string',
                'min:3',
                'max:30',
                Rule::unique('companies')
                    ->ignore(Company::where('user_id', $user->id)->first()->id)];
            $rules['logo'] = ['nullable', 'file', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'];
            $rules['business_types'] = ['required', 'array', 'min:1'];
            $rules['business_types.*'] = [
                'required',
                'integer',
                Rule::exists('business_types', 'id'),
            ];
             $rules['categories'] = ['required', 'array', 'min:1'];
            $rules['categories.*'] = [
                'required',
                'integer',
                Rule::exists('categories', 'id'),
            ];
            $rules['company_count'] = ['integer', 'in:1'];
        }

        return $rules;
    }

    /**
     * Get the validation rules for step 2.
     */
    protected function step2Rules(): array
    {

        return [
            'address_line_1' => ['required', 'string'],
            'city_id' => [
                'required',
                'integer',
                Rule::exists('cities', 'id')->where(function ($query) {
                    if (isset($this->state_id)) {
                        $query->where('state_id', $this->state_id);
                    }
                }),
            ],
         
            'state_id' => ['required', 'integer', 'exists:states,id'],
            'pincode' => ['required', 'integer'],
        ];
    }

    /**
     * Get the validation rules for step 3.
     */
    protected function step3Rules(): array
    {
        return [
            'mobile' => [
                'required',
                'string',
                Rule::exists('otp_verifies', 'contact')
                    ->where('is_verified', true)->where('type', OtpVerify::MOBILE)
                    ->where('model', OtpVerifyModel::COMPANY),
            ],
            'email' => [
                'required',
                'email',
                Rule::exists('otp_verifies', 'contact')
                    ->where('is_verified', true)
                    ->where('type', OtpVerify::EMAIL)
                    ->where('model', OtpVerifyModel::COMPANY),
            ],
            'landline_1' => ['nullable'],
            'landline_2' => ['nullable'],
            'website_url' => ['required', 'string'],
            'fax' => ['nullable'],
            'contact_person' => ['required', 'string'],
            'insta_url' => ['nullable', 'string', 'url'],
            'twitter_x_url' => ['nullable', 'string', 'url'],
            'facebook_url' => ['nullable', 'string', 'url'],
        ];
    }

    /**
     * Get the validation rules for step 4.
     */
    protected function step4Rules(): array
    {
        return [
            'establishment_year' => ['nullable'],
            'yearly_turnover' => ['nullable'],
            'age_group' => ['nullable'],
            'price' => ['sometimes'],
            'export_area_present' => ['nullable'],
            'export_area_rqrd' => ['nullable'],
            'agent_distributors_rqrd' => ['nullable'],
            'newspapers' => ['nullable'],
            'news_channels' => ['nullable'],
            'gst' => ['nullable'],
            'festive_period' => ['nullable'],
            'special_comments' => ['sometimes'],
            'price_range' => ['nullable'],
            'product_details' => ['sometimes'],
        ];
    }

    public function messages()
    {
        return [
            'company_count.in' => 'Multiple companies can not be created with an account',
        ];
    }
}