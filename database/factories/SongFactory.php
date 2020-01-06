<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'album_id' => App\Album::all(['id'])->random(),
    ];
});

$factory->afterCreating(Song::class, function ($song, $faker) {
    $genre = App\Genre::pluck('id')->random(3)->toArray();
    $song->genre()->attach($genre);

    $artists = App\Artist::pluck('id')->random(3)->toArray();
    $song->artists()->attach($artists);
});
