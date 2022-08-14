<?php

namespace App\Http\Requests\Admin\Post;

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
            'title' => 'required|string|min:3|max:30',
            'main_image' => 'required',
            'preview_image' => 'required',
            'content' => 'string|min:3|required',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id'
        ];
    }

    public function messages() {
        return [
            'title.required' => 'This field must be filled in',
            'title.string' => 'This field should be a string',
            'title.min' => 'Minimum field value: 3',
            'title.max' => 'Maximum field value: 30',
            'main_image.required' => 'You need to upload an image',
            'preview_image.required' => 'You need to upload an image',
            'content.string' => 'This field should be a string',
            'content.min' => 'Minimum field value: 3',
            'content.required' => 'This field must be filled in',
            'category_id.required' => 'This field must be filled in',
            'category_id.exists' => 'the value of this field must be in the database',
            'tag_ids.array' => 'this field must be an array'
        ];
    }
}
