<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\publicaciones_pacientes;
use Faker\Generator as Faker;

$factory->define(publicaciones_pacientes::class, function (Faker $faker) {
    return [
        'paciente_id'=>4,
        'title'=>$faker->sentence,
        'post_image'=>$faker->imageUrl('700','400'),
        'body'=>$faker->paragraph,
        'description'=>$faker->paragraph
    ];
});
