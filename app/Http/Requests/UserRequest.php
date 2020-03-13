<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|max:50',
            'password' => 'required|max:64',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dien ten đi m ê',
            'password.required' => 'Dien password đi m ê'
        ];
    }
}
