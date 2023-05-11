<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJobPostRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'salary_lower' => 'required|numeric|min:0|max:99999',
            'salary_higher' => 'required|numeric|min:0|max:99999|after_or_equal:salary_lower',
            'type' => 'required',
            'shift' => 'required|string',
            'description' => 'required|max:500',        ];
    }
}
