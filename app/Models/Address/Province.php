<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Model;
use App\Models\Brand\Brand;
use App\Models\Customer\CustomerAddress;
use RajaOngkir;

class Province extends Model
{
	//
	protected $fillable = ['id', 'province'];

	public static function populate() {
		$provinces = RajaOngkir::province();
		$provinces = json_decode($provinces);
		$provinces = $provinces->rajaongkir->results;
		foreach ($provinces as $key => $value) {
			# code...
			$province = static::firstOrNew(['id' => $value->province_id]);
			$province->province = $value->province;
			$province->save();
		}
	}

	public function brands()
	{
		return $this->hasMany(Brand::class);
	}

	public function customerAddress()
	{
		return $this->hasMany(CustomerAddress::class);
	}
}
