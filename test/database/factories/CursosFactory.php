<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kits_de_robotica;
use App\Curso;
use Faker\Generator as Faker;

$factory->define(Curso::class, function (Faker $faker) {
    
    $kitNombres = Kits_de_robotica::pluck('nombre')->toArray();
    $nombreKitRobotica = count($kitNombres) ? $faker->randomElement($kitNombres) : $faker->word;

    return [
        'titulo'            => $faker->sentence,                          // Genera un título tipo oración
        'caratula'          => $faker->imageUrl(640, 480, 'abstract', true), // URL de una imagen de ejemplo
        'contenido'         => $faker->paragraphs(3, true),               // Genera 3 párrafos concatenados
        'materialDidactico' => $faker->word,                              // Una palabra aleatoria
        'nombreKitRobotica' => $nombreKitRobotica,  
    ];
});
