<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * @return View index
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }

}