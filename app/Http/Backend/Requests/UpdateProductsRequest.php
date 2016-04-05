<?php

namespace App\Http\Backend\Requests;

use App\Http\Backend\Requests\Request;
use Route;

class UpdateProductsRequest extends Request
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
            'name'=>'required|unique:products,name,'.$this->segment(3),
            'quantity'=>'required|min:1',
            'price'=>'required|min:1',
            'image'=>'image|max:2048',
        ];
    }
}
