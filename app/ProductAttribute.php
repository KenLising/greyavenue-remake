<?php

namespace App;

use App\Color;
use App\Product;
use App\Size;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
