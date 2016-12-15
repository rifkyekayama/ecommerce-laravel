<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Model;
use App\Models\Brand\Brand;
use App\Models\Customer\CustomerAddress;
use RajaOngkir;

class City extends Model
{
    //
    protected $fillable = ['id', 'province_id', 'type', 'city', 'postal_code'];

    public static function populate() {
		$cities = RajaOngkir::city();
		$cities = json_decode($cities);
		$cities = $cities->rajaongkir->results;
		foreach ($cities as $key => $value) {
			# code...
			$city = static::firstOrNew(['id' => $value->city_id]);
			$city->province_id = $value->province_id;
			$city->type = $value->type;
			$city->city = $value->city_name;
			$city->postal_code = $value->postal_code;
			$city->save();
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
