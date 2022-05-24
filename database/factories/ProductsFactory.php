<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Products;
use Faker\Generator as Faker;
$factory->define(Products::class, function (Faker $faker) {
    return [
        "product" => "iphone " . $faker->firstNameMale(),
        "product_description" => $faker->paragraph(rand(1, 4)),
        "price" => $faker->numberBetween(10, 1000) . '$',
        "photos" => $faker->domainName(),
        "size" => $faker->numberBetween(1, 4),
        "color" => $faker->colorName(),
        "count" => rand(50, 160),
        "type" => 'male',
        "rate" => rand(1, 5)
    ];
});
