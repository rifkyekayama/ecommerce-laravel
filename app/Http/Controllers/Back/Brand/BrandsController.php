<?php

namespace App\Http\Controllers\Back\Brand;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand\Brand;

class BrandsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
		$brands = Brand::orderBy('created_ad', 'desc')->get();
		return view('back.pages.brand.index', compact('brands'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		return view('back.pages.brand.create');
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
		Storage::makeDirectory('brands');
		$filename = '';
		if($request->hasFile('photo')){
			$filename = 'brands/'.slug($request->get('name')).$request->file('photo')->getClientOriginalExtension();
			Storage::put($filename, file_get_contents($request->file('photo')));
		}

		$brand = new Brand;
		$brand->photo = $filename != '' ? Storage::url($filename) : '';
		$brand->name = $request->get('name');
		$brand->province_id = $request->get('province_id');
		$brand->city_id = $request->get('city_id');
		$brand->subdistrict_id = $request->get('subdistrict_id');
		$brand->address = $request->get('address');
		$brand->postal_code = $request->get('postal_code');
		$brand->phone = $request->get('phone');
		$brand->contact_name = $request->get('contact_name');
		$brand->save();

		return redirect()->route('admin.brand.index');
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
		$brand = Brand::find(decrypt($id));
		return view('back.pages.brand.show', compact('brand'));
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
		$brand = Brand::find(decrypt($id));
		return view('back.pages.brand.edit', compact('brand'));
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
		Storage::makeDirectory('brands');
		$brand = Brand::find(decrypt($id));

		$filename = '';
		if($request->hasFile('photo')){
			$filename = 'brands/'.slug($request->get('name')).$request->file('photo')->getClientOriginalExtension();
			Storage::put($filename, file_get_contents($request->file('photo')));
			$brand->photo = Storage::url($filename);
		}else{
			$brand->photo = $brand->photo;
		}

		$brand->name = $request->get('name');
		$brand->province_id = $request->get('province_id');
		$brand->city_id = $request->get('city_id');
		$brand->subdistrict_id = $request->get('subdistrict_id');
		$brand->address = $request->get('address');
		$brand->postal_code = $request->get('postal_code');
		$brand->phone = $request->get('phone');
		$brand->contact_name = $request->get('contact_name');
		$brand->update();

		return redirect()->route('admin.brand.index');
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
		$brand = Brand::find(decrypt($id))->delete();

		$brands = Brand::orderBy('created_ad', 'desc')->get();
		return view('back.pages.brand.index', compact('brands'));
	}
}
