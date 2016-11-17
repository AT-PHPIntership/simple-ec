<?php

namespace App\Http\Frontend\Controllers;

use Illuminate\Http\Request;
use App\Http\Frontend\Requests;
use Cart;
use DB;
use Auth;
use App\Models\Order;
use Flash;

class OrderController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Cart::content();
        $total = Cart::total();
        return view('frontend.cart.order', compact('content', 'total'));
    }

    /**
     * View order success
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function success()
    {
        if (Cart::count(false) === 0) {
            return redirect()->route('cart.index');
        }
        return view('frontend.cart.success');
    }

    /**
     * Add cart to order.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addOrder()
    {
        if (Cart::count(false) > 0) {
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->status = Order::ORDER_UNVIEW;
            if ($order->save()) {
                Cart::destroy();
                return redirect()->route('order.success');
            }
            Flash::error('Sever is busy. Please try again.');
            return redirect()->route('order');
        } else {
            Flash::error('Cart is Empty. Please add products to cart before send.');
            return redirect()->route('home');
        }
    }
}
