<?php

namespace App\Http\Frontend\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * Display a listing of the new products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->select('id', 'name', 'price', 'image')->orderBy('id', 'DESC')->skip(0)->take(6)->get();
        return view('frontend.dashboard.index', compact('products'));
    }
}
