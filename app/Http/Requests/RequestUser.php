<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUser extends FormRequest
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
            'name' => 'required|max:255|min:8',
            'email' => 'required|max:255|min:8|unique:users,email',
            'password' => 'required'
            //
        ];
    }
    public function messages()
    {
        return [
            //
            'name.required' => 'Tên người dùng không được để trống',
            'name.min' => 'Tên người dùng ít nhất 8 kí tự',
            'nam.max' => 'Tên người dùng nhiều nhất 255 kí tự',
            'email.required' => 'Email không được để trống',
            'email.min' => 'Email ít nhất 8 kí tự',
            'email.max' => 'Email nhiều nhất 255 kí tự',
            'email.unique' => 'Đã có người đăng kí email này',
            'password.required' => 'Mật khẩu không được để trống'
        ];
    }
}
