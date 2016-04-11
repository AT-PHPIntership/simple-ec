<?php

namespace App\Http\Backend\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Backend\Requests;
use App\Http\Backend\Controllers\Controller;
use DB;
use App\Models\Order;
use App\Models\OrdersDetail;
use Flash;

class OrdersController extends Controller
{
    /**
     * Display a listing of the orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with(['ordersDetail','user'])->orderBy('id', 'DESC')->paginate();
        $orderList = new Order();
        foreach ($orders as $order) {
            $order->viewBold = ($order->status == Order::ORDER_UNVIEW) ? 'text-bold' : '';
            $order->viewTitle = $orderList->getTitleStatus($order->status);
            $order->viewCss = $orderList->getCssStatus($order->status);
        }
        return view('backend.orders.index', compact('orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id id orders
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::with(['ordersDetail', 'user', 'ordersDetail.product'])->findOrFail($id);
        if ($order->status === Order::ORDER_UNVIEW) {
            $order->status = Order::ORDER_PENDING;
            $order->update();
        }
        return view('backend.orders.view', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id orders
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::with(['ordersDetail', 'user', 'ordersDetail.product'])->findOrFail($id);
        if ($order->status === Order::ORDER_UNVIEW) {
            $order->status = Order::ORDER_PENDING;
            $order->update();
        }
        return view('backend.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request request update
     * @param int                      $id      id orders
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $data = $request->all();
        $order->update($data);
        Flash::success('Update products success.');
        return redirect()->route('admin.orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id delete orders
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        $messages = "Delete orders success.";
        Flash::success($messages);
        return redirect()->route('admin.orders.index');
    }
}
