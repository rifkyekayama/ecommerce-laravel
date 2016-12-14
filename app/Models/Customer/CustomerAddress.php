<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;
use App\Models\Address\Province;
use App\Models\Address\City;
use App\Models\Address\Subdistrict;

class CustomerAddress extends Model
{
    //
    public function customer()
    {
    	return $this->belongsTo(Customers::class);
    }

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
}
