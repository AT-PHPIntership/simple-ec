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
            'quantity'=>'required',
            'price'=>'required',
            'image'=>'image|max:2048',
        ];
    }

    /**
     * Message validate
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'=>'name is required .',
            'name.unique'=>'this name is exists.',
            'quantity.required'=>'quantity is required.',
            'quantity.min'=>'Minimum is 1.',
            'price.required'=>'price is required .',
            'price.min'=>'Minimum is 1.',
            'image.image'=>'image is required.',
            'image.max'=>'Maximum is 2 Mb !',
            'image.required'=>'image is required.',
        ];
    }
}
