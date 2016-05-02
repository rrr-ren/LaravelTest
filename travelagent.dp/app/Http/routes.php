<?php


Route::get('home', 'HomeController@index');


get('/', ['as' => 'main', 'uses' => 'IndexController@index']);




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
