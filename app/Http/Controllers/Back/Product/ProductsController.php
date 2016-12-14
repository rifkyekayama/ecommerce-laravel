<?php

namespace App\Http\Controllers\Back\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product\Product;

class ProductsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
		$products = Product::orderBy('created_at', 'desc')->get();
		return view('back.pages.product.index', compact('products'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		return view('back.pages.product.create');
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
		$product = new Product;
		$product->brands_id = decrypt($request->get('brands_id'));
		$product->category_id = decrypt($request->get('category_id'));
		$product->name = $request->get('name');
		$product->sub_text = $request->get('sub_text');
		$product->status = $request->get('status');
		$product->desc = $request->get('desc');
		$product->stock = $request->get('stock');
		$product->original_price = $request->get('original_price');
		$product->price  = $request->get('price');
		$product->discount = $request->get('discount');
		$product->meta_title = $request->get('meta_title');
		$product->meta_keyword = $request->get('meta_keyword');
		$product->save();

		return redirect()->route('admin.product.index');
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
		$product = Product::find(decrypt($id));
		return view('back.pages.product.show', compact('product'));
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
		$product = Product::find(decrypt($id));

		return view('back.pages.product.edit', compact('product'));
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
		$product = Product::find(decrypt($id));
		$product->brands_id = decrypt($request->get('brands_id'));
		$product->category_id = decrypt($request->get('category_id'));
		$product->name = $request->get('name');
		$product->sub_text = $request->get('sub_text');
		$product->status = $request->get('status');
		$product->desc = $request->get('desc');
		$product->stock = $request->get('stock');
		$product->original_price = $request->get('original_price');
		$product->price  = $request->get('price');
		$product->discount = $request->get('discount');
		$product->meta_title = $request->get('meta_title');
		$product->meta_keyword = $request->get('meta_keyword');
		$product->update();

		return redirect()->route('admin.product.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
		$product = Product::find(decrypt($id))->delete();

		$products = Product::orderBy('created_at', 'desc')->get();
		return view('back.pages.product.index', compact('products'));
	}
}
