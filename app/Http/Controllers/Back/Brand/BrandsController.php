<?php

namespace App\Http\Controllers\Back\Brand;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Back\Brands\BrandStore;
use App\Models\Brand\Brand;
use App\Models\Address\Province;
use App\Models\Address\City;
use App\Models\Address\Subdistrict;
use Form;
use Storage;

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
		$brands = Brand::orderBy('created_at', 'desc')->get();
		return view('back.pages.brand.index', compact('brands'))->withTitle('Kelola Brand');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		$provinces = Province::pluck('province', 'id');
		return view('back.pages.brand.create', compact('provinces'))->withTitle('Tambah Brand');
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
			$filename = 'brands/'.str_slug($request->get('name')).'.'.$request->file('photo')->getClientOriginalExtension();
			Storage::put($filename, file_get_contents($request->file('photo')));
		}

		$brand = new Brand;
		$brand->photo = $filename != '' ? Storage::url($filename) : '';
		$brand->name = $request->get('name');
		$brand->email = $request->get('email');
		$brand->province_id = $request->get('province_id');
		$brand->city_id = $request->get('city_id');
		$brand->subdistrict_id = $request->get('subdistrict_id');
		$brand->address = $request->get('address');
		$brand->postal_code = $request->get('postal_code');
		$brand->phone = $request->get('phone');
		$brand->contact_name = $request->get('contact_name');
		$brand->save();

		return redirect()->route('admin.brands.index');
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
		return view('back.pages.brand.show', compact('brand'))->withTitle('Lihat Brand');
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
		$provinces = Province::pluck('province', 'id');
		$cities = City::where('province_id', '=', $brand->province_id)->pluck('city', 'id');
		$subdistricts = Subdistrict::where('province_id', '=', $brand->province_id)->where('city_id', '=', $brand->city_id)->pluck('subdistrict', 'id');
		return view('back.pages.brand.edit', compact('brand', 'provinces', 'cities', 'subdistricts'))->withTitle('Ubah Brand');
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
			$filename = 'brands/'.str_slug($request->get('name')).'.'.$request->file('photo')->getClientOriginalExtension();
			Storage::put($filename, file_get_contents($request->file('photo')));
			$brand->photo = Storage::url($filename);
		}else{
			$brand->photo = $brand->photo;
		}

		$brand->name = $request->get('name');
		$brand->email = $request->get('email');
		$brand->province_id = $request->get('province_id');
		$brand->city_id = $request->get('city_id');
		$brand->subdistrict_id = $request->get('subdistrict_id');
		$brand->address = $request->get('address');
		$brand->postal_code = $request->get('postal_code');
		$brand->phone = $request->get('phone');
		$brand->contact_name = $request->get('contact_name');
		$brand->update();

		return redirect()->route('admin.brands.index');
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

		$brands = Brand::orderBy('created_at', 'desc')->get();
		return view('back.pages.brand._table', compact('brands'));
	}

	public function city($name, $province_id)
	{
		$cities = City::where('province_id', '=', $province_id)->orderBy('type', 'asc')->get();
		$data = [];
		foreach ($cities as $value) {
			# code...
			$data[$value->id] = $value->type.' '.$value->city;
		}
		return Form::select($name, $data, null, ['placeholder' => 'Pilih', 'class' => 'form-control select2', 'id' => $name]);
	}

	public function subdistrict($name, $province_id, $city_id)
	{
		$subdistricts = Subdistrict::where('province_id', '=', $province_id)->where('city_id', '=', $city_id)->pluck('subdistrict', 'id');
		return Form::select($name, $subdistricts, null, ['placeholder' => 'Pilih', 'class' => 'form-control select2', 'id' => $name]);
	}
}
