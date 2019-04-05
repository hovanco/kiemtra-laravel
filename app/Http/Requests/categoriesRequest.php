<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoriesRequest extends FormRequest
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
            'name' => 'required',
            'quantity' => 'required',
            'status' => 'required'
            //Tên trong form
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Vui lòng nhập đầy đủ!',
            'quantity.required' => 'Vui lòng nhập đầy đủ!',
            'status.required' => 'Vui lòng nhập đầy đủ!',
            //rang buoc dl
        ];
    }
}

