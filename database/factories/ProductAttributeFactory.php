<?php

use App\ProductAttribute;
use Faker\Generator as Faker;

$factory->define(ProductAttribute::class, function (Faker $faker) {
    return [
    	'image' => $faker->imageUrl(300, 500, 'cats', true, 'Faker'),
        'color' => $faker->safeColorName,
        'size' => $faker->word,
        'price' => $faker->randomFloat($nbMaxDecimals = 10, $min = 100, $max = 1000),
        'quantity' => $faker->numberBetween(5, 20),
    ];
});
