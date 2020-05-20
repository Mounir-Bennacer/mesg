<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\GroupeTechnique;
use Faker\Generator as Faker;

$factory->define(GroupeTechnique::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->randomNumber(3),
        'description' => $faker->city()
    ];
});
