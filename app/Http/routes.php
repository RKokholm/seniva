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

Route::group(['middleware' => 'web'], function() {

	Route::get('/', ['as' => 'home_path', 'uses' => 'HomeController@index']);


	/* Auth Middleware */

	Route::group(['middleware' => 'auth'], function(){

		/* User */
		Route::resource('user', 'UserController');

		/* Projects */

		Route::resource('project', 'ProjectsController');

		/* Admin */
		Route::get('admin', ['as' => 'admin_path', 'uses' => 'AdminController@getIndex']);
		Route::get('admin/users', ['as' => 'admin_users_path', 'uses' => 'AdminController@getUserManagement']);
		Route::get('admin/projects', ['as' => 'admin_projects_path', 'uses' => 'AdminController@getProjectsManagement']);
		Route::get('admin/projects/create', ['as' => 'admin_project_create_path', 'uses' => 'AdminController@getProjectCreate']);

	});

	/* Login / Logout */
	Route::get('login', ['as' => 'login_path', 'uses' => 'SessionController@index']);
	Route::post('login', ['as' => 'login_path', 'uses' => 'SessionController@store']);
	Route::get('logout', ['as' => 'logout_path', 'uses' => 'SessionController@delete']);

	/* Static Pages */
	Route::get('prices', ['as' => 'prices_path', 'uses' => 'PricesController@index']);
	Route::get('order', ['as' => 'orders_path', 'uses' => 'OrdersController@index']);
	Route::get('portfolio', ['as' => 'portfolio_path', 'uses' => 'PortfolioController@index']);

	Route::get('cloud', function(){
	
		// $image = \Cloudinary\Uploader::upload("http://media2.s-nbcnews.com/j/newscms/2014_09/211871/140226-federal-reserve-building-950a_ddcaf2cb1fed3804f3d032ca1e27edbd.nbcnews-fp-1200-800.jpg");
		


	});

});