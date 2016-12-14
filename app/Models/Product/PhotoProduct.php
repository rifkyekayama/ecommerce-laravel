<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product\Product;

class PhotoProduct extends Model
{
    //
    public function product(){
    	return $this->belongsTo(Product::class);
    }
}
