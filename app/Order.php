<?php

namespace App;

use App\Customer;
use App\OrderItem;
use App\OrderStatus;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer()
    {
    	return $this->belongsTo(Customer::class);
    }

    public function order_status()
    {
    	return $this->belongsTo(OrderStatus::class);
    }

    public function order_items()
    {
    	return $this->hasMany(OrderItem::class);
    }
}
