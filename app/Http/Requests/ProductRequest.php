<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {

        $this->merge([
            'company_id' => Auth::user()->company->id,
        ]);

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|exists:dictionaries',
            'price' => 'required',
            'company_id' => 'required|exists:companies,id',
            'description' => 'nullable|string',
            'images' => 'nullable|array',
            'is_active' => 'required|boolean',
            'categories' => 'array|exists:categories,id',
        ];
    }
}
