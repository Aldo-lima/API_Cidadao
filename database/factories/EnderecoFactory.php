<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Endereco;
use Faker\Generator as Faker;

$factory->define(Endereco::class, function (Faker $faker) {
    return [
        'cep'=> $faker->ean8,
        'logradouro'=> $faker->name,
        'numero'=> $faker->buildingNumber,
        'bairro'=>$faker->name,
        'cidade' =>$faker->citySuffix,
        'uf'=> 'SP'
    ];
});
