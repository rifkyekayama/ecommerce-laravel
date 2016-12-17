<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use App\Models\Brand\Brand;
use App\Models\Category\Category;
use App\Models\Product\PhotoProduct;

class Product extends Model
{
    //

    public function brand()
    {
    	return $this->belongsTo(Brand::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function photoProduct()
    {
    	return $this->hasMany(PhotoProduct::class);
    }

    public function stockProduct()
    {
        return $this->hasOne(StockProduct::class);
    }

    public function initStock()
    {
        $stock = new StockProduct;
        $stock->product()->associate($this);

        return $stock;
    }

    public function setPhoto($id)
    {
        $photos = PhotoProduct::where('ipaddress', '=', $_SERVER['REMOTE_ADDR'])->where('product_id', '=', null)->update(['product_id' => $id]);
        return $photos;
    }
}
