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
Route::get('/', ['as' => 'home_path', 'uses' => 'HomeController@index']);
Route::get('/about', ['as' => 'about_path', 'uses' => 'AboutController@index']);
Route::get('/prices', ['as' => 'prices_path', 'uses' => 'PricesController@index']);
Route::get('/order', ['as' => 'orders_path', 'uses' => 'OrdersController@index']);
Route::get('/portfolio', ['as' => 'portfolio_path', 'uses' => 'PortfolioController@index']);
Route::get('/order/packs', ['as' => 'order_packs_path', 'uses' => 'OrdersController@getpacks']);
Route::get('/order/single', ['as' => 'order_single_path', 'uses' => 'OrdersController@getsingle']);