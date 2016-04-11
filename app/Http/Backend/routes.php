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
Route::group(['middleware' => ['admin','auth:admin']], function () {
    Route::get('/', 'DashboardController@index')->name('admin');
    //category
    Route::resource('categories', 'CategoryController');
    //product
    Route::resource('products', 'ProductsController');
    //admin users
    Route::resource('admin-users', 'AdminUsersController');
    //user
    Route::resource('users', 'UsersController');
    //orders
    Route::resource('orders', 'OrdersController');
});

Route::group(['middleware' => ['admin']], function () {

    // Authentication routes...
    Route::get('login', 'Auth\AuthController@getLogin')->name('admin.login');
    Route::post('login', 'Auth\AuthController@postLogin')->name('admin.login');
    Route::get('logout', 'Auth\AuthController@getLogout')->name('admin.logout');

    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');
    Route::get('password/reset/{token?}', 'Auth\PasswordController@getReset');
    Route::post('password/reset/{token?}', 'Auth\PasswordController@postReset');
});
