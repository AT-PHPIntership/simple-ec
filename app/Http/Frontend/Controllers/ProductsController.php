<?php

namespace App\Http\Frontend\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Frontend\Requests;
use Auth;

class ProductsController extends Controller
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
        $products = Product::select('id', 'name', 'image', 'price', 'keywords')->orDerBy('id', 'DESC')->skip(0)->take(6)->get();
        return view('frontend.dashboard.index', compact('products'));
    }

    /**
     * Show list products by category
     *
     * @param int $id id category
     *
     * @return \Illuminate\Http\Response
     */
    public function listProducts($id)
    {
        $products = Product::where('category_id', $id)->paginate(10);
        return view('frontend.dashboard.listProducts', compact('products'));
    }

    /**
     * Show list products by category
     *
     * @param int $id id category
     *
     * @return \Illuminate\Http\Response
     */
    public function detailProduct($id)
    {
        $product = Product::findOrfail($id);
        return view('frontend.dashboard.detailProduct', compact('product'));
    }
}
