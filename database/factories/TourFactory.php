<?php

namespace Database\Factories;

use App\Models\Tour;
use Faker\Generator as Faker;

$factory->define(Tour::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence,
        'descripcion' => $faker->paragraph,
        'tipo_actividad' => 'aventura', // Un valor de ejemplo para el tipo de actividad
    ];
});
