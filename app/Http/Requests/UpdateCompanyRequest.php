<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'company_name' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'numeric'], // 'digits_between:9,10'
            'company_email' => ['required', 'email'],
            'reg_no' => ['required', 'numeric', 'digits:12', 'unique:' . Company::class],
            'company_location' => ['required', 'string'],
            'company_description' => ['nullable', 'string'],        ];
    }
}
