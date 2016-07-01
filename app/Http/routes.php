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
	'uses'    => '\App\Http\Controllers\HomeController@index',
	'as'      => 'home',
]);

Route::get('/dashboard', [
	'uses'    => '\App\Http\Controllers\HomeController@dashboard',
	'as'      => 'dashboard',
]);

Route::get('/signup', [
	'uses'    => '\App\Http\Controllers\AuthController@getSignup',
	'as'      => 'auth.signup',
	'middleware' => ['guest'],
]);

Route::post('/signup', [
	'uses'    => '\App\Http\Controllers\AuthController@postSignup',
	'middleware' => ['guest'],
]);

Route::get('/signin', [
	'uses'    => '\App\Http\Controllers\AuthController@getSignin',
	'as'      => 'auth.signin',
	'middleware' => ['guest'],
]);

Route::post('/signin', [
	'uses'    => '\App\Http\Controllers\AuthController@postSignin',
]);

Route::get('/signout', [
	'uses'    => '\App\Http\Controllers\AuthController@getSignout',
	'as'      => 'auth.signout'
]);

Route::get('/forgot_password', [
	'uses'    => '\App\Http\Controllers\AuthController@getForgotPassword',
	'as'      => 'forgotpassword',
	'middleware' => ['guest'],
]);

Route::post('/forgot_password', [
	'uses'    => '\App\Http\Controllers\AuthController@postForgotPassword',
]);

Route::get('/mail', [
	'uses'    => '\App\Http\Controllers\EmailController@index',
	'as'      => 'email'
]);
