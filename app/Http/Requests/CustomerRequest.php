<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'ten' => 'required|min:10|max:100',
            'dia_chi' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'ten.required' => trans('Không được để trống'),
            'ten.min' => trans('Tên phải nhập z'),
            'ten.max' => 'ten khong qua 100 ki tu',
            'dia_chi.required' => trans('Không được để trống'),
        ];
    }
}
