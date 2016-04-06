<?php

namespace App\Http\Backend\Controllers;

use Illuminate\Http\Request;
use App\Http\Backend\Requests;
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
