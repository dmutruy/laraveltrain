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
Route::controllers([
	'cart' => 'CartController',
	'acaunt' => 'Cabinet\AcauntController',
	'works/{id?}' => 'Cabinet\WorksController',
	'cabinet' => 'Cabinet\CabinetController',
	'user/{id?}' => 'Admin\UsersController',
	'main' => 'Admin\MainController',
	'products' => 'ProductsController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/{id?}', 'BaseController@index');

//Route::get('home', 'HomeController@index');


