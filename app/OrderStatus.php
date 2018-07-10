<?php

namespace App;

use App\Order;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    public $timestamps = false;

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
