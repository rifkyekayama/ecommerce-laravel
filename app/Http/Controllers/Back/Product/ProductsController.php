<?php

namespace App\Http\Controllers\Back\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Product\StockProduct;
use App\Models\Product\PhotoProduct;
use App\Models\Brand\Brand;
use App\Models\Category\Category;

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
		return view('back.pages.product.index', compact('products'))->withTitle('Kelola Produk');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		$brands = Brand::orderBy('name', 'asc')->pluck('name', 'name');
		$categories = Category::orderBy('name', 'asc')->pluck('name', 'name');
		$photos = PhotoProduct::where('ipaddress', '=', $_SERVER['REMOTE_ADDR'])->where('product_id', '=', null)->get();
		return view('back.pages.product.create', compact('brands', 'categories', 'photos'))->withTitle('Tambah Produk');
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
		$product->brand_id = Brand::where('name', '=', $request->get('brands_id'))->first()['id'];
		$product->category_id = Category::where('name', '=', $request->get('category_id'))->first()['id'];
		$product->name = $request->get('name');
		$product->sub_text = $request->get('sub_text');
		$product->status = $request->get('status');
		$product->desc = $request->get('desc');
		$product->original_price = str_replace('.', '', $request->get('original_price'));
		$product->price  = str_replace('.', '', $request->get('price'));
		$product->discount = $request->get('discount');
		$product->meta_title = $request->get('meta_title');
		$product->meta_keyword = $request->get('meta_keyword');
		$product->save();
		$product->initStock()->setStock(0)->saveStock();
		$product->setPhoto($product->id);

		return redirect()->route('admin.products.index');
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
		return view('back.pages.product.show', compact('product'))->withTitle('Lihat Produk');
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
		$brands = Brand::orderBy('name', 'asc')->pluck('name', 'name');
		$categories = Category::orderBy('name', 'asc')->pluck('name', 'name');
		$photos = PhotoProduct::where('ipaddress', '=', $_SERVER['REMOTE_ADDR'])->where('product_id', '=', $product->id)->get();

		return view('back.pages.product.edit', compact('product', 'brands', 'categories', 'photos'))->withTitle('Ubah Produk');
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
		$product->brand_id = $request->get('brands_id');
		$product->category_id = $request->get('category_id');
		$product->name = $request->get('name');
		$product->sub_text = $request->get('sub_text');
		$product->status = $request->get('status');
		$product->desc = $request->get('desc');
		$product->original_price = str_replace('.', '', $request->get('original_price'));
		$product->price  = str_replace('.', '', $request->get('price'));
		$product->discount = $request->get('discount');
		$product->meta_title = $request->get('meta_title');
		$product->meta_keyword = $request->get('meta_keyword');
		$product->update();

		return redirect()->route('admin.products.index');
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
		$product = Product::find(decrypt($id));
		$product->delete();

		$products = Product::orderBy('created_at', 'desc')->get();
		return view('back.pages.product.index', compact('products'));
	}
}
