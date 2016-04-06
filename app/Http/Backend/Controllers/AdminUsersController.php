<?php

namespace App\Http\Backend\Controllers;

use Illuminate\Http\Request;
use App\Http\Backend\Requests;
use App\Http\Backend\Requests\CreateAdminUsersRequest;
use App\Http\Backend\Requests\UpdateAdminUsersRequest;
use App\Models\AdminUser;
use Flash;
use Hash;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminUsers = AdminUser::all();
        return view('backend.admin.index', compact('adminUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request request for create
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdminUsersRequest $request)
    {
        $data = $request->all();
        AdminUser::create($data);
        Flash::success('Create new admin user success.');
        return redirect()->route('admin.admin-users.index');
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
        $adminUser = AdminUser::findOrFail($id);
        return view('backend.admin.view', compact('adminUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id admin user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminUser = AdminUser::findOrFail($id);
        return view('backend.admin.edit', compact('adminUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request request for update
     * @param int                      $id      id admin user
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminUsersRequest $request, $id)
    {
        $adminUser = AdminUser::findOrFail($id);
        $data = $request->all();
        $adminUser->update($data);
        Flash::success('Update admin users success.');
        return redirect()->route('admin.admin-users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id id admin user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminUser = AdminUser::findOrFail($id);
        $adminUser->delete();
        $messages = "Delete admin users success.";
        Flash::success($messages);
        return redirect()->route('admin.admin-users.index');
    }
}
