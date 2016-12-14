<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //

    public function customerAddress()
    {
    	return $this->hasMany(CustomerAddress::class);
    }
}
