<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\product;
use Faker\Generator as Faker;

$factory->define(product::class, function (Faker $faker) {
    return [
        'ProductName' => $faker->word,
        'ProductType' => $faker->word,
        'Quality' => $faker->word,
        'Active' => $faker->boolean,
        'Weight' => $faker->numberBetween(1,1000),
        'OwnerID' => $faker->numberBetween(1,10),

    ];
});
