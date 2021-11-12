<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pessoa;
use Faker\Generator as Faker;

$factory->define(Pessoa::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'sobre_nome' =>$faker->name,
        'cpf' =>$faker->ipv4,
    ];
});
