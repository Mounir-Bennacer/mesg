<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use \App\Mesg;
use \App\Users;

$factory->define(Mesg::class, function (Faker $faker) {
    return [
        "programme" => $faker->word(2),
        "num" => $faker->randomDigit(),
        "nb_pce" => $faker->randomNumber(2),
        "nb_sg" => $faker->randomNumber(1),
        "adresse" => $faker->streetAddress(),
        "code_postal" => $faker->postcode(),
        "commune" => $faker->city(),
        "batiment" => $faker->word(2),
        "groupe_technique_id" => $faker->randomNumber(1),
        "charge_affaire_id" => $faker->randomNumber(1),
        "delai" => $faker->randomNumber(2),
        "date_reception_mail" => $faker->dateTime(),
        "date_reception_cm" => $faker->dateTime(),
        "date_souhaite" => $faker->dateTime(),
        "user_id" => $faker->randomNumber(1)
    ];
});


$factory->define(User::class, function (Faker $faker) {
    return [
        "nom" => $faker->firstName(),
        "prenom" => $faker->lastName(),
        "NNI" => $faker->word(6),
        "GAIA" => $faker->randomNumber(4),
        "telephone" => $faker->phoneNumber(2),
        "email" => $faker->email(),
        "password" => $faker->city(),
    ];
});
