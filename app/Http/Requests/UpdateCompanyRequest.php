<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateCompanyRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'numeric'], // 'digits_between:9,10'
            'email' => ['required', 'email'],
            'reg_no' => ['required', 'numeric', 'digits:12', Rule::unique('companies')->ignore(Auth::user()->company_id)],
            'location' => ['required', 'string'],
            'description' => ['nullable', 'string'],

        ];
    }
}
