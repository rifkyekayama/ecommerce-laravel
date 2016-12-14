<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['namespace' => 'Back', 'prefix' => 'admin', 'as' => 'admin.'], function(){
	
	Route::auth();

	Route::resource('dashboard', 'DashboardController');

	Route::resource('profile', 'Profile\ProfileController');

	Route::resource('kelola-admin', 'Admin\AdminController');

	Route::resource('brands', 'Brand\BrandsController');

	Route::resource('products', 'Product\ProductsController');

});