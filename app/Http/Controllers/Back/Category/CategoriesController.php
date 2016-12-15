<?php

namespace App\Http\Controllers\Back\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category\Category;

class CategoriesController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
		$categories = Category::orderBy('created_at', 'desc')->get();
		return view('back.pages.category.index', compact('categories'))->withTitle('Kelola Kategori');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		return view('back.pages.category.create')->withTitle('Tambah Kategori');
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
		$category = new Category;
		$category->name = $request->get('name');
		$category->icon = $request->get('icon');
		$category->save();

		return redirect()->route('admin.categories.index');

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
		$category = Category::find(decrypt($id));
		return view('back.pages.category.show', compact('category'))->withTitle('Lihat Kategori');
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
		$category = Category::find(decrypt($id));
		return view('back.pages.category.edit', compact('category'))->withTitle('Ubah Kategori');
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
		$category = Category::find(decrypt($id));
		$category->name = $request->get('name');
		$category->icon = $request->get('icon');
		$category->update();

		return redirect()->route('admin.categories.index');
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
		$category = Category::find(decrypt($id))->delete();
		$categories = Category::orderBy('created_at', 'desc')->get();
		return view('back.pages.category.index', compact('categories'));
	}
}
