<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumno;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'nombre' => 'Jose',
        'apellido' => 'Deodanes',
        'fechaNacimiento' => '2000-12-12',
        'direccion' => 'San salvador',
        'genero' => 'Masculino',
        'telefono' => 77777777,
        'correo' => 'josedeodanes99@gmail.com',
        'clave' => bcrypt('jose')

    ];
});
