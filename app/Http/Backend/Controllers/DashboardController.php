<?php

namespace App\Http\Backend\Controllers;

use Illuminate\Http\Request;

use App\Http\Backend\Requests;
use App\Http\Backend\Controllers\Controller;

class DashboardController extends Controller
{
     /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.dashboard.index');
    }
}
