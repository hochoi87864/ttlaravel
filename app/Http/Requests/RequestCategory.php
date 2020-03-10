<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCategory extends FormRequest
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
            'name'=>'required|max:255|min:16|unique:categories,c_name,'.$this->id,
            // 'icon'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên danh mục không được để trống !',
            'name.unique' => 'Tên danh mục đã tồn tại',
            'name.max' => 'Tên danh mục không quá 255 kí tự',
            'name.min' => 'Tên danh mục phải trên 16 kí tự'
            // 'icon.required'=>'Icon không được để trống'
        ];
    }
}
