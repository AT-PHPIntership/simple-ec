<?php

namespace App\Http\Backend\Controllers;

use Illuminate\Http\Request;
use App\Http\Backend\Requests;
use App\Http\Backend\Requests\CreateUsersRequest;
use App\Http\Backend\Requests\UpdateUsersRequest;
use App\User;
use Flash;
use Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request request create user
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUsersRequest $request)
    {
        $data = $request->all();
        User::create($data);
        Flash::success('Create new admin user success.');
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id id admin user
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('backend.users.view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request request update user
     * @param int                      $id      id users
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();
        $user->update($data);
        Flash::success('Update users success.');
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id id user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $messages = "Delete users success.";
        Flash::success($messages);
        return redirect()->route('admin.users.index');
    }
}
