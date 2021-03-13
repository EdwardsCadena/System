<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Empleado;
use Faker\Generator as Faker;



$factory->define(App\Empleado::class, function (Faker $faker) {
    return [
        'Nombre' => $faker->name,
        'Apellidos' => $faker->lastName,                                        
        'FkEmpresa' => $faker->randomElement(\App\Empresa::pluck('IdEmpresa')),
        'Email' =>  $faker->unique()->safeEmail,
        'Telefon' => $faker->e164PhoneNumber
    ];
});




