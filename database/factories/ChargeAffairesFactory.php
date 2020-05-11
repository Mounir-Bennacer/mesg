<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ChargeAffaires;
use Faker\Generator as Faker;

$factory->define(ChargeAffaires::class, function (Faker $faker) {
    return [
        'mesg_id' => 1,
        'centre_id' => 2,
        'nom' => $faker->lastName,
        'prenom' => $faker->firstName,
        'telephone_fixe' => $faker->e164PhoneNumber,
        'telephone_portable' => $faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
    ];
});
