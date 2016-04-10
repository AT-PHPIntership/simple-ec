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
Route::group(['middleware' => ['web','auth:web']], function () {

    Route::get('/home', 'HomeController@index');
});


Route::group(['middleware' => ['web']], function () {
    // Authentication routes...
    Route::get('/', 'HomeController@index');
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
    Route::get('register', 'Auth\AuthController@getRegister');
    Route::post('register', 'Auth\AuthController@postRegister');

    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');
    Route::get('password/reset/{token?}', 'Auth\PasswordController@getReset');
    Route::post('password/reset/{token?}', 'Auth\PasswordController@postReset');
    //Index products
    Route::get('/', 'ProductsController@index');
    //List products
    Route::get('list/{id}', 'ProductsController@listProducts');
    //Detail products
    Route::get('detail/{id}', 'ProductsController@detailProduct');

});
