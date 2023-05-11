<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJobInterviewRequest extends FormRequest
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
            'date' => ['required',],
            'start_time' => ['required'],
            'end_time' => ['required','after_or_equal:end_time'],
            'type' => 'required',
            'link' => 'nullable',
            'location' => 'nullable',
            'description' => 'required|max:500',        ];
    }
}
