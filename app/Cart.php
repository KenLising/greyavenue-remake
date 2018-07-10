<?php

namespace App;

use App\CartItem;
use App\Customer;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	public $timestamps = false;

	public function customer() 
	{
		return $this->belongsTo(Customer::class);
	}

	public function cart_items() 
	{
		return $this->hasMany(CartItem::class);
	}
}
