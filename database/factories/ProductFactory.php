<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => rtrim($faker->sentence(3), "."),
        'description' => $faker->sentence(10),
        'long_description' => $faker->text,
        'price' => $faker->randomFloat(2, 5, 150),

        'category_id'=>$faker->numberBetween(1,5)
    ];
});
