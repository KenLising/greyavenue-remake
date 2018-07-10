<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public $timestamps = false;

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
