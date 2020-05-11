<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\GroupeTechnique;
use Faker\Generator as Faker;

$factory->define(GroupeTechnique::class, function (Faker $faker) {
    return [
        //
        'user_id' => 6,
        'title' => '191',
        'description' => 'Lyon'
    ];
});
