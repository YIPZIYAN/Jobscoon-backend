<?php

namespace App\Http\Requests;

use App\Models\Company;
use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
            'company_name' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'numeric'], // 'digits_between:9,10'
            'reg_no' => ['required', 'numeric', 'digits:12','unique:' . Company::class],
            'company_location' => ['required', 'string'],
            'company_description' => ['nullable', 'string'],
        ];
    }
}
