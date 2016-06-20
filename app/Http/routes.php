<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'uses' => '\App\Http\Controllers\HomeController@index',
	'as' => 'home',
]);

Route::get('/signin', [
	'uses' => '\App\Http\Controllers\AuthController@index',
	'as' => 'signin',
]);

Route::get('/signup', [
	'uses' => '\App\Http\Controllers\AuthController@signup',
	'as' => 'signup',
]);