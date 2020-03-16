<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VcerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'identification' => 'required|max:50',
            'address' => 'required|max:128',
            'phone' => 'required|max:10',
            'age' => 'required|max:128',
        ];
    }
}
