<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Centres;
use Faker\Generator as Faker;

$factory->define(Centres::class, function (Faker $faker) {
    return [
        "code_centre" => $faker->randomNumber(3),
        "ville" => $faker->city(),
        "adresse" => $faker->streetAddress(),
        "code_postal" => $faker->postcode,
    ];
});
