<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Route;

class UsersRequest extends Request
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
        $uri      = Route::current()->getUri();
        if ($uri == 'admin/users/edit/{id}') {
            return [
                'name'     => 'required',
                'email'    => 'required|email|max:255|unique:users,email,'.$this->segment(4),
            ];
        }else{
            return [
                'name'     => 'required',
                'email'    => 'required|email|max:255|unique:users,email,'.$this->segment(4),
                'password' => 'required|confirmed|min:6',
            ];
        }
    }
}
