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
    return view('welcome');
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
/**
 * Route for Backend
 */
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {
    require __DIR__.'/Routes/Dashboard.php';
    require __DIR__.'/Routes/Users.php';
});


Route::group(['middleware' => ['web']], function () {
    require __DIR__.'/Routes/Auth.php';
    require __DIR__.'/Routes/Frontend.php';
});
