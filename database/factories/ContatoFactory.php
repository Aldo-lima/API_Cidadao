<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\Models\Contato;

$factory->define(Contato::class, function (Faker $faker) {
    return [
        'telefone'=>$faker->phoneNumber,
        'email'=>$faker->freeEmail,
    ];
});
