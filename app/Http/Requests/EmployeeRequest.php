<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'ten' => 'required|max:100',
            'ngay_sinh' => 'required|date',
            'tai_khoan' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'ten.required' => trans('Không được để trống'),
            'ten.max' => 'ten khong qua 100 ki tu',
            'tai_khoan.required' =>trans('Không được để trống trống'),
            'ngay_sinh.requires' => trans('Không được để trống'),
            'ngay_sinh.date' => 'Ngày tháng không đúng định dạng',
        ];
    }
}
