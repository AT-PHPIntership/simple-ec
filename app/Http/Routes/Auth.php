<?php
Route::auth();
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::post('password/reset/{token?}', 'Auth\PasswordController@postReset');
