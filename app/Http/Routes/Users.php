<?php
Route::get('users', 'Admin\UsersController@index');
Route::get('users/data', 'Admin\UsersController@getData');
Route::get('users/create', 'Admin\UsersController@getCreate');
Route::post('users/create', 'Admin\UsersController@postCreate');
Route::get('users/edit/{id}', 'Admin\UsersController@getEdit');
Route::post('users/edit/{id}', 'Admin\UsersController@postEdit');
Route::get('users/delete/{id}', 'Admin\UsersController@getDelete');