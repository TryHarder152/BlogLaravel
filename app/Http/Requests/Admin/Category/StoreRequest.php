<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:3|max:30'
        ];
    }

    public function messages() {
        return [
            'title.required' => 'This field must be filled in',
            'title.string' => 'This field should be a string',
            'title.min' => 'Minimum field value: 3',
            'title.max' => 'Maximum field value: 30',
        ];
    }
}
