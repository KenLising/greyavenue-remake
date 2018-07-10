<?php

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'avatar' => 'noavatar.jpg',
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => Hash::make('password'),
    ];
});
