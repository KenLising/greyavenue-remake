<?php

namespace App;

use App\Subcategory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    public function subcategories()
    {
    	return $this->hasMany(Subcategory::class);
    }
}
