<?php

namespace App\Http\Backend\Requests;

use App\Http\Backend\Requests\Request;
use App\Http\Backend\Requests\CategoryRequest;

class CategoryRequest extends Request
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
            'txtName'=>'required|unique:categories,name',
            'image'=>'required|image|max:2048',
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
            'txtName.required'=>'Vui lòng nhập tên chuyên mục !',
            'image.image'=>'Bạn phải nhập file hình ảnh !',
            'image.max'=>'Dung lượng bức ảnh không được quá 2 Mb !',
            'image.required'=>'Vui long chon hinh anh!'
        ];
    }
}
