<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Empresa::class, function (Faker $faker) {
    return [
        'Nombre' => $faker->name,
        'Email' =>  $faker->unique()->safeEmail,                            
        'Logo' => $faker->imageUrl($width = 640, $height = 480),        
        'Site' => $faker->url
    ];
});

