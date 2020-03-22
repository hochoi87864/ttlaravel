<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPassword extends FormRequest
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
            'passwordreset' => 'required',
            'confirmpasswordreset' => 'required|same:password'
        ];
    }
    public function messages()
    {
        return [
            'passwordreset.required' => 'Mật khẩu không được để trống',
            'confirmpasswordreset.required' => 'Mật khẩu nhập lại không được để trống !',
            'confirmpasswordreset.same' => 'Mật khẩu nhập lại không khớp !'
        ];
    }
}
