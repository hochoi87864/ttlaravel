<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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
            'pro_name'=>'required|max:255|min:6|unique:products,pro_name,'.$this->id,
            'pro_category_id'=>'required',
            'pro_price' => 'required',
            'pro_description' => 'max:255',
            'pro_number' => 'required|min:1',
            'pro_sale' => 'required',
            'pro_content' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'pro_name.required'=>'Tên sản phẩm không được để trống !',
            'pro_name.unique' => 'Tên sản phẩm đã tồn tại!',
            'pro_name.max' => 'Tên sản phẩm không quá 255 kí tự',
            'pro_name.min' => 'Tên sản phẩm phải trên 6 kí tự',
            'pro_number.required' => 'Số lượng không được để trống',
            'pro_number.min' =>'Số lượng phải lớn hơn 1',
            'pro_category_id.required'=>'Trường mã loại không được để trống!',
            'pro_price.required'=>'Giá sản phẩm không được để trống!',
            'pro_sale.required' => 'Trường giảm giá không thể để trống bạn có thể nhập giá trị giảm giá bằng 0',
            'pro_content.required'=>"Nội dung sản phẩm không được để trống!",
            'pro_description.max'  => "Mô tả không quá 255 kí tự"
        ];
    }
}
