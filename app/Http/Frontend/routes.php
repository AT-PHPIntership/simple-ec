<?php

    /*
    |--------------------------------------------------------------------------
    | Routes File
    |--------------------------------------------------------------------------
    |
    | Here is where you will register all of the routes in an application.
    | It's a breeze. Simply tell Laravel the URIs it should respond to
    | and give it the controller to call when that URI is requested.
    |
    */

    Route::get('/', function () {
        return view('frontend.dashboard.index');
    });

    /*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | This route group applies the "web" middleware group to every route
    | it contains. The "web" middleware group is defined in your HTTP
    | kernel and includes session state, CSRF protection, and more.
    |
    */

    Route::group(['middleware' => ['web']], function () {
        Route::get('list', function () {
            return view('frontend.dashboard.listproduct');
        });
        Route::get('detail', function () {
            return view('frontend.dashboard.detailproduct');
        });
        Route::get('cart', function () {
            return view('frontend.dashboard.cart');
        });
        Route::get('order', function () {
            return view('frontend.dashboard.order');
        });
        Route::get('mess', function () {
            return view('frontend.dashboard.mess_order');
        });
    });
