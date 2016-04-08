<?php

namespace App\Http\Frontend\Controllers;

use Illuminate\Http\Request;
use App\Http\Frontend\Requests;
use Cart;
use DB;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Cart::content();
        $total = Cart::total();
        return view('frontend.cart.index', compact('content', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param int $id id product
     *
     * @return \Illuminate\Http\Response
     */
    public function buyProduct($id)
    {
        $products = Product::findOrFail($id);
        Cart::add(['id' => $id, 'name' => $products->name, 'qty' => 1, 'price' => $products->price, 'options' => ['image' => $products->image]]);
        return redirect()->route('cart.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request request for create
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request['id'];
        $products = Product::findOrFail($id);
        $qty = $request['quantity'];
        Cart::add(['id' => $id, 'name' => $products->name, 'qty' => $qty, 'price' => $products->price, 'options' => ['image' => $products->image]]);
        return redirect()->route('cart.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request request for update
     * @param int                      $id      id admin user
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $qty = $request['quantity'];
        Cart::update($id, $qty);
        return redirect()->route('cart.index');
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
        Cart::remove($id);
        return redirect()->route('cart.index');
    }
}
