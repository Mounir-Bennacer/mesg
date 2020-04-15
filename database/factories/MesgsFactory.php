<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use \App\Mesgs;

$factory->define(Mesgs::class, function (Faker $faker) {
    return [
        "description" => $faker->sentence(6),
        "num" => $faker->randomDigit(),
        "programme" => $faker->word(2),
        "pce" => $faker->randomNumber(),
        "nb_pce" => $faker->randomNumber(2),
        "nb_sg" => $faker->randomNumber(1),
        "batiment" => $faker->word(2),
        "commune" => $faker->city(),
        "adresse" => $faker->streetAddress(),
        "gtc_id" => $faker->randomNumber(1),
        "date_reception_mail" => $faker->dateTime(),
        "date_reception_cm" => $faker->dateTime(),
        "delai" => $faker->randomNumber(2),
        "date_souhaite" => $faker->dateTime(),
        "user_id" => $faker->randomNumber(1)
    ];
});
