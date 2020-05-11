<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commentaires;
use Faker\Generator as Faker;

$factory->define(Commentaires::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigitNotNull,
        'mesg_id' => $faker->randomNumber(2),
        'canal' => 'EN' . $faker->word,
        'motif' => $faker->sentence(),
        'description' => $faker->paragraph(),
    ];
});
