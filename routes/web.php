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

	Route::resource('photos-product', 'Product\ProductPhotosController');
	Route::delete('photos-product/delete-create/{id}', 'Product\ProductPhotosController@destroyCreate');
	Route::delete('photos-product/delete-edit/{id}/{product_id}', 'Product\ProductPhotosController@destroyEdit');

	Route::resource('categories', 'Category\CategoriesController');

});

Route::group(['namespace' => 'Back'], function(){
	Route::get('/', function(){
		return view('front.pages.home.index');
	});
});