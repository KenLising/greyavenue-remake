<?php

use App\Product;
use App\Subcategory;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
    	'subcategory_id' => Subcategory::pluck('id')->random(),
        'name' => $faker->word,
        'description' => $faker->sentence(3)
    ];
});
