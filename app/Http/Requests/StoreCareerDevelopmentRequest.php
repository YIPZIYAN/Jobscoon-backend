<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCareerDevelopmentRequest extends FormRequest
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

                'title' => ['required', 'string', 'max:255'],
                'date_start' => ['required','date'],
                'date_end' => ['required','date','after_or_equal:date_start'],
                'start_time' => ['required','date_format:H:i'],
                'end_time' => ['required','date_format:H:i','after:start_time'],
                'type' => 'required',
                'link' => 'required_without:location',
                'location' => 'required_without:link',
                'description' => 'required|max:500',
                'max_capacity' => 'required|numeric',
        ];
    }
}
