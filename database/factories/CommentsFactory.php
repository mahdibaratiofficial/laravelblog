<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comments;
use Faker\Generator as Faker;

$factory->define(Comments::class, function (Faker $faker) {
    return [
        'userid'=>$faker->numberBetween(100,200),
        'product_id'=>$faker->numberBetween(300,400),
        'body'=>$faker->titleMale(),
        'rate'=>$faker->numberBetween(1,5),
    ];
});
