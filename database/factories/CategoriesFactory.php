<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categories;
use Faker\Generator as Faker;

$factory->define(Categories::class, function (Faker $faker) {
    $name=$faker->sentence(rand(1,2));
    return [
        'name' => $name,
        
        
    ];
});
