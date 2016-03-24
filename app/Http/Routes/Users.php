<?php
Route::get('user', 'Admin\UsersController@index');
Route::get('user/data', 'Admin\UsersController@getData');
Route::get('user/create', 'Admin\UsersController@getCreate');
Route::post('user/create', 'Admin\UsersController@postCreate');
Route::get('user/edit/{id}', 'Admin\UsersController@getEdit');
Route::post('user/edit/{id}', 'Admin\UsersController@postEdit');
Route::get('user/delete/{id}', 'Admin\UsersController@getDelete');