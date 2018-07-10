<?php

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'avatar' => 'noavatar.jpg',
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => Hash::make('password'),
    ];
});
