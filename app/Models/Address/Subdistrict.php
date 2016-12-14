<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Model;
use App\Models\Brand\Brand;
use App\Models\Customer\CustomerAddress;
use RajaOngkir;

class Subdistrict extends Model
{
    //
    protected $fillable = ['id', 'province_id', 'city_id', 'type', 'subdistrict'];

    public static function populate() {
		$cities = RajaOngkir::city();
		$cities = json_decode($cities);
		$cities = $cities->rajaongkir->results;
		foreach ($cities as $key => $value) {
			# code...
			$subdistricts = RajaOngkir::subdistrict($value->city_id);
			$subdistricts = json_decode($subdistricts);
			$subdistricts = $subdistricts->rajaongkir->results;
			foreach ($subdistricts as $key => $val) {
				# code...
				$subdistrict = static::firstOrNew(['id' => $val->subdistrict_id]);
				$subdistrict->province_id = $val->province_id;
				$subdistrict->city_id = $val->city_id;
				$subdistrict->type = $val->type;
				$subdistrict->subdistrict = $val->subdistrict_name;
				$subdistrict->save();
			}
		}
	}

	public function brands()
	{
		return $this->hasMany(Brand::class)
	}

	public function customerAddress()
	{
		return $this->hasMany(CustomerAddress::class);
	}
}
