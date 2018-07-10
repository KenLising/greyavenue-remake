<?php

namespace App;

use App\CartItem;
use App\OrderItem;
use App\ProductAttribute;
use App\SizeType;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public function cart_items()
    {
    	return $this->hasMany(CartItem::class);
    }

    public function order_items()
    {
    	return $this->hasMany(OrderItem::class);
    }

    public function product_attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }
}
