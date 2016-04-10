<?php

namespace App\Providers;

use App\Models\AdminUser;
use App\Models\Order;
use App\User;
use Illuminate\Support\ServiceProvider;
use Hash;
use Cart;
use App\Models\OrdersDetail;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::saving(function ($user) {
            if (Hash::needsRehash($user['password'])) {
                $user['password'] = Hash::make($user['password']);
            }
        });

        AdminUser::saving(function ($user) {
            if (Hash::needsRehash($user['password'])) {
                $user['password'] = Hash::make($user['password']);
            }
        });

        Order::saved(function ($order) {
            $contents = Cart::content();
            foreach ($contents as $item) {
                $orderDetail = new OrdersDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $item['id'];
                $orderDetail->quantity = $item['qty'];
                $orderDetail->price = $item['subtotal'];
                $orderDetail->save();
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
