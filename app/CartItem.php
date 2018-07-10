<?php

namespace App;

use App\Cart;
use App\Color;
use App\Product;
use App\Size;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
	public function cart()
	{
		return $this->belongsTo(Cart::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
