<?php

namespace App\Http\Frontend\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Frontend\Requests;
use Auth;

class ProductsController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::select('id', 'name', 'image', 'price')->orDerBy('id', 'DESC')->skip(0)->take(6)->get();
        return view('frontend.dashboard.index', compact('products'));
    }
}
