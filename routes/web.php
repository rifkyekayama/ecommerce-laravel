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
	Route::get('brands/city/{name}/{province_id}', 'Brand\BrandsController@city')->name('admin.brands.city');
	Route::get('brands/subdistrict/{name}/{province_id}/{city_id}', 'Brand\BrandsController@subdistrict')->name('admin.brands.subdistrict');

	Route::resource('products', 'Product\ProductsController');

	Route::resource('categories', 'Category\CategoriesController');

});