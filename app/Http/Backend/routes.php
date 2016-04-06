<?php

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
    /**
     * Route for Backend
     */
    Route::group(['middleware' => ['web']], function () {
        Route::get('/', 'DashboardController@index')->name('admin');
        //category
        Route::resource('categories', 'CategoryController');
        //product
        Route::resource('products', 'ProductsController');
        //user
        Route::resource('users', 'UsersController');
    });
