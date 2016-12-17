<?php

namespace App\Http\Controllers\Back\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand\Brand;
use App\Models\Product\PhotoProduct;
use Storage;

class ProductPhotosController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
		Storage::makeDirectory('products');
		$filename = '';
		if($request->hasFile('photo')){
			$filename = 'products/'.str_slug($request->get('brands_id').' '.$request->get('name').' '.$request->file('photo')->getClientOriginalName()).'.'.$request->file('photo')->getClientOriginalExtension();
			Storage::put($filename, file_get_contents($request->file('photo')));
		}

		$photo = new PhotoProduct;
		$photo->photo = $filename != '' ? Storage::url($filename) : '';
		$photo->isPrimary = 'no';
		$photo->ipaddress = $_SERVER['REMOTE_ADDR'];
		$photo->save();

		$photos = PhotoProduct::where('ipaddress', '=', $_SERVER['REMOTE_ADDR'])->where('product_id', '=', null)->get();
		return view('back.pages.product._listImage', compact('photos'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroyCreate($id)
	{
		//
		$photo = PhotoProduct::find(decrypt($id));
		$photo->delete();

		$photos = PhotoProduct::where('ipaddress', '=', $_SERVER['REMOTE_ADDR'])->where('product_id', '=', null)->get();
		return view('back.pages.product._listImage', compact('photos'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroyEdit($id, $product_id)
	{
		//
		$photo = PhotoProduct::find(decrypt($id));
		$photo->delete();

		$photos = PhotoProduct::where('ipaddress', '=', $_SERVER['REMOTE_ADDR'])->where('product_id', '=', $product_id)->get();
		return view('back.pages.product._listImage', compact('photos'));
	}
}
