<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\http\Requests\UsersRequest;
use App\Http\Controllers\Controller;
use App\User;
use Datatables;
use App\Helpers\GeneralHelper;
use Flash;

class UsersController extends Controller
{
    /**
     * index
     */
    public function index(){
        return view('admin.users.index');
    }

    /**
     * function GET create Users
     */
    public function getCreate()
    {
        $title = 'Create new users';
        return view('admin.users.form', compact('title'));
    }

    /**
     * @param UsersRequest $request
     * function POST create Users
     */
    public function postCreate(UsersRequest $request)
    {
        $data      = $request->except('_token', 'password_confirmation');
        $users     = User::createUser($data);
        $messages = [
            'success' => 'Create new user success.',
            'error'   => 'Create new user failed.'
        ];
        if( $users ) {
            Flash::success($messages['success']);
            return redirect('/admin/users');
        } else {
            Flash::error($messages['error']);
            return redirect(('/admin/users/create'));
        }
    }

    /**
     * @param $id
     *  function GET edit users
     */
    public function getEdit($id)
    {
        $title = "Update user";
        $users = User::getUsersById($id);
        return view('admin.users.form', compact('title','users'));
    }

    /**
     * @param $id
     * @param UsersRequest $request
     *  function POST edit users
     */
    public function postEdit($id, UsersRequest $request)
    {
        $data  = $request->except('_token');
        $users     = User::updateUser($id, $data);
        $messages = [
            'success' => 'Update users success.',
            'error'   => 'Update new users failed.'
        ];
        if( $users ) {
            Flash::success($messages['success']);
            return redirect('/admin/users');
        } else {
            Flash::error($messages['error']);
            return redirect(('/admin/users/edit'));
        }
    }

    /**
     * @param $id
     * delete a user
     */
    public function getDelete($id)
    {
        $user     = User::getUsersById($id, true);
        $status   = $user->delete();
        $messages = [
            'success' => 'Delete users success.',
            'error'   => 'Delete users failed.'
        ];
        return GeneralHelper::setMessage($status, $messages, '/admin/users');
    }

    /**
     *  get data users
     */
    public function getData()
    {
        $users = User::getData();
        $dataTables = Datatables::of($users)
            ->add_column('actions'
                ,'<a href="{{{ URL::to(\'admin/users/edit/\' . $id) }}}" class="btn btn-sm btn-icon btn-default btn-info" >
                    <i class="icon wb-pencil" aria-hidden="true"></i>
                </a>
                <a href="{{{ URL::to(\'admin/users/delete/\' . $id) }}}" class="btn-del btn btn-sm btn-icon btn-default btn-danger">
                    <i class="icon wb-trash" aria-hidden="true"></i>
                </a>')
            ->remove_column('id')
            ->make();
        return $dataTables;
    }
}
