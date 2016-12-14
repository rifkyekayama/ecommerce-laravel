<?php

namespace App\Models\Brand;

use Illuminate\Database\Eloquent\Model;
use App\Models\Address\Province;
use App\Models\Address\City;
use App\Models\Address\Subdistrict;
use App\Models\Product\Product;

class Brand extends Model
{
    //

    public function province()
    {
    	return $this->belongsTo(Province::class);
    }

    public function city()
    {
    	return $this->belongsTo(City::class);
    }

    public function subdistrict()
    {
    	return $this->belongsTo(Subdistrict::class);
    }

    public function product()
    {
    	return $this->hasMany(Product::class);
    }
}
