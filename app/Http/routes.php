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

/* User */
Route::resource('user', 'UserController');

/* Admin */
Route::get('admin', ['as' => 'admin_path', 'uses' => 'AdminController@getIndex']);
Route::get('admin/users', ['as' => 'admin_users_path', 'uses' => 'AdminController@getUserManagement']);
Route::get('admin/projects', ['as' => 'admin_projects_path', 'uses' => 'AdminController@getProjectsManagement']);

/* Login / Logout */
Route::get('login', ['as' => 'login_path', 'uses' => 'SessionController@index']);
Route::post('login', ['as' => 'login_path', 'uses' => 'SessionController@store']);

/* Static Pages */
Route::get('prices', ['as' => 'prices_path', 'uses' => 'PricesController@index']);
Route::get('order', ['as' => 'orders_path', 'uses' => 'OrdersController@index']);
Route::get('portfolio', ['as' => 'portfolio_path', 'uses' => 'PortfolioController@index']);
