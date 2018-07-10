<?php

namespace App;

use App\Color;
use App\Order;
use App\Product;
use App\Size;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public function order()
    {
    	return $this->belongsTo(Order::class);
    }

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
