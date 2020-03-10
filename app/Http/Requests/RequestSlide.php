<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestSlide extends FormRequest
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
            's_name' => 'required|min:8|max:255',
        ];
    }
    public function messages()
    {
        return [
            //
            's_name.required' => 'Bạn đã bỏ trống tên Slide',
            's_name.min'      => 'Tên slide ít nhất 8 kí tự',
            's_name.max'        =>'Tên slide không quá 255 kí tự'
        ];
    }
}
