<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCareerDevelopmentRequest extends FormRequest
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
            'date_start' => ['required',],
            'date_end' => ['required','after_or_equal:date_start'],
            'start_time' => ['required'],
            'end_time' => ['required'],
            'type' => 'required',
            'link' => 'nullable',
            'location' => 'nullable',
            'description' => 'required|max:500',
            'capacity' => 'nullable|numeric',        ];
    }
}
