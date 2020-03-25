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
            'cmnd' => 'required|max:50',
            'address' => 'required|max:128',
            'phone' => 'required|max:10',
            'age' => 'required|max:128',
            'images' => 'images|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required',
            'time' => 'required',
            'status' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Bạn phải nhập tên đầy đủ',
            'name.required'=>'Bạn phải nhập tên đầy đủ',
            'name.required'=>'Bạn phải nhập tên đầy đủ',
        ];
    }
}
