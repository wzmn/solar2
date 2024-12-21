<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Or implement your authorization logic here
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',  // Example
            'description' => 'required',     // Example
            'date' => 'required',     // Example
            'apply_link' => 'nullable',     // Example
            // Add validation rules for other fields in your Job model
            // For example:
            // 'location' => 'required|string',
            // 'salary' => 'nullable|numeric',
            // 'company_name' => 'required|string',
            // 'application_deadline' => 'required|date', //etc.
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'description.required' => 'A description is required',
            'date.required' => 'A date is required',
            'apply_link.required' => 'A apply_link is required',
            // Add custom error messages for other fields as needed
        ];
    }
}
