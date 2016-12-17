<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class StockProduct extends Model
{
    //
	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function setStock($stock)
	{
		$this->stock = $stock;
		return $this;
	}

	public function saveStock()
	{
		$this->save();
		return $this;
	}
}
