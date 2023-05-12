<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobPostRequest extends FormRequest
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
            'title' => ['required','string','max:255'],
            'salary_lower' => ['required','numeric'],
            'salary_upper' => ['required','gt:salary_lower','numeric'],
            'type' => ['required','string'],
            'shift' => ['required','string'],
            'description' => ['nullable','string'],
        ];
    }
}
