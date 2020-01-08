<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'nom' => $faker->lastName,
        'prenom' => $faker->firstName,
        'dateNaissance' => $faker->date,
        'adresse' => $faker->address,
        'tel' => $faker->randomNumber(8, true),
        'created_at' => now(),
        'updated_at' => now()
    ];
});