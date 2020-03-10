<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestArticle extends FormRequest
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
            'a_name'=>'required|min:16|max:255|unique:articles,a_name,'.$this->id,
            'a_content'=>'required',
            'a_description' => 'required|max:255|min:10'
        ];
    }
    public function messages()
    {
        return [
            'a_name.required'=>'Tên bài viết không được để trống !',
            'a_name.unique' => 'Tên bài viết đã tồn tại',
            'a_content.required'=>'Nội dung không được để trống',
            'a_name.max' => 'Tên bài báo không quá 255 kí tự',
            'a_name.min' => 'Tên bài báo phải trên 16 kí tự',
            'a_description.required' => "Mô tả không được để trống",
            'a_description.max' => "Mô tả không quá 255 kí tự",
            'a_description.min' => "Mô tả ít nhất 10 kí tự"
        ];
    }
}
