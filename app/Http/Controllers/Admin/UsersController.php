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
     * Index users
     *
     * @return view index users
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Function GET create Users
     *
     * @return view create.
     */
    public function getCreate()
    {
        $title = 'Create new users';
        return view('admin.users.form', compact('title'));
    }

    /**
     * Function POST create Users
     *
     * @param UsersRequest $request request of users.
     *
     * @return result submit create user.
     */
    public function postCreate(UsersRequest $request)
    {
        $data      = $request->except('_token', 'password_confirmation');
        $users     = User::createUser($data);
        $messages = [
            'success' => 'Create new user success.',
            'error'   => 'Create new user failed.'
        ];
        if ($users) {
            Flash::success($messages['success']);
            return redirect('/admin/users');
        } else {
            Flash::error($messages['error']);
            return redirect(('/admin/users/create'));
        }
    }

    /**
     * Function GET edit users
     *
     * @param int $id id user.
     *
     * @return view edit
     */
    public function getEdit($id)
    {
        $title = "Update user";
        $users = User::getUsersById($id);
        return view('admin.users.form', compact('title', 'users'));
    }

    /**
     * Function POST edit Users
     *
     * @param int          $id      id user.
     * @param UsersRequest $request request of users.
     *
     * @return string url
     */
    public function postEdit($id, UsersRequest $request)
    {
        $data  = $request->except('_token');
        $users     = User::updateUser($id, $data);
        $messages = [
            'success' => 'Update users success.',
            'error'   => 'Update new users failed.'
        ];
        if ($users) {
            Flash::success($messages['success']);
            return redirect('/admin/users');
        } else {
            Flash::error($messages['error']);
            return redirect(('/admin/users/edit'));
        }
    }

    /**
     * Delete A Users
     *
     * @param int $id id of user
     *
     * @return users after delete
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
     * Get data Users
     *
     * @return Data users
     */
    public function getData()
    {
        $users = User::getData();
        $dataTables = Datatables::of($users)
            ->add_column(
                'actions',
                '<a href="{{{ URL::to(\'admin/users/edit/\' . $id) }}}" class="btn btn-sm btn-icon btn-default btn-info" >
                    <i class="icon wb-pencil" aria-hidden="true"></i>
                </a>
                <a href="{{{ URL::to(\'admin/users/delete/\' . $id) }}}" class="btn-del btn btn-sm btn-icon btn-default btn-danger">
                    <i class="icon wb-trash" aria-hidden="true"></i>
                </a>'
            )
            ->remove_column('id')
            ->make();
        return $dataTables;
    }
}
