<?php

namespace App\Http\Requests;

use App\Models\Company;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'phone' => ['required', 'digits_between:9,10', 'numeric'],
            'description' => ['nullable', 'string'],
            'address' => ['nullable', 'string', 'nullable'],
            'password' => ['required', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()],

            'is_new_company' => ['required_if:is_employer,true'],
            'search_company' => ['required_if:is_new_company,false'],

            'company_name' => ['exclude_unless:is_new_company,true', 'required', 'string', 'max:255'],
            'contact_number' => ['exclude_unless:is_new_company,true', 'required', 'numeric'], // 'digits_between:9,10'
            'company_email' => ['exclude_unless:is_new_company,true', 'required','email'],
            'reg_no' => ['exclude_unless:is_new_company,true', 'required', 'numeric', 'digits:12', 'unique:' . Company::class],
            'company_location' => ['exclude_unless:is_new_company,true', 'required', 'string'],
            'company_description' => ['exclude_unless:is_new_company,true', 'nullable', 'string'],
        ];
    }
}
