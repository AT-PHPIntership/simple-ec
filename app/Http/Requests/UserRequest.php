<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Route;

class UserRequest extends Request
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
        $password = $this->request->get('password');
        if ($uri == 'admin/user/edit/{id}' && empty($password)) {
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
