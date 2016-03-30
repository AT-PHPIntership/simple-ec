<?php

namespace App\Http\Backend\Requests;

use App\Http\Backend\Requests\Request;
use App\Http\Backend\Requests\EditCategoryRequest;

class EditCategoryRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtName'=>'required',
            'image'=>'image|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'txtName.required'=>'Vui lòng nhập tên chuyên mục !',
            'image.max'=>'Dung lượng bức ảnh không được quá 2 Mb !',
            'image.image'=>'Bạn phải nhập file hình ảnh !'
        ];
    }
}
