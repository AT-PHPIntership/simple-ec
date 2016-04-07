<?php

namespace App\Http\Frontend\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Frontend\Requests;
use Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the new products.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::select('id', 'name', 'price', 'image')->orderBy('id', 'DESC')->skip(0)->take(6)->get();
        return view('frontend.dashboard.index', compact('products'));
    }
}
