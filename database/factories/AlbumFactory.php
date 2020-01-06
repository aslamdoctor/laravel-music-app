<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'description' => $faker->sentence(5),
        'release_date' => $faker->date(),
    ];
});
