<?php

namespace App\Http\Backend\Requests;

use App\Http\Backend\Requests\Request;
use Route;

class UpdateAdminUsersRequest extends Request
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
            'name'     => 'required|min:6|max:25|regex:/^[a-zA-Z0-9]+([_\s\-]?[a-zA-Z0-9])*$/|unique:admin_users,name,'.$this->segment(3),
            'email'    => 'required|email|max:255|unique:admin_users,email,'.$this->segment(3)
        ];
    }
}
