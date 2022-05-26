<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
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
     * @return array
     */
    public function rules()
    {
        return [
            'updateContent' => ['required', 'max:20'],

        ];
    }

    public function messages() {
        return [
            'updateContent.required' => '更新するタスクを入力してください。',
            'updateContent.max' => '更新するタスクは20文字以下で入力してください。',
        ];
    }
}
