<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product\Product;

class Category extends Model
{
    //
    public function product()
    {
    	return $this->hasMany(Product::class);
    }
}
