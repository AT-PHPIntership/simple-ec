<?php

namespace App\Http\Backend\Requests;

use App\Http\Backend\Requests\Request;
use App\Http\Backend\Requests\AddCategoryRequest;

class AddCategoryRequest extends Request
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
     **/
    public function rules()
    {
        return [
            'name'  =>'required|unique:categories,name',
            'image' =>'required|image|max:2048',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     **/
    public function messages()
    {
        return [
            'name.required'     =>'Vui lòng nhập tên chuyên mục !',
            'image.image'       =>'Bạn phải nhập file hình ảnh !',
            'image.max'         =>'Dung lượng bức ảnh không được quá 2 Mb !',
            'image.required'    =>'Vui lòng chọn hình ảnh!',
        ];
    }
}
