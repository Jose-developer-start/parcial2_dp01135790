<?php

use Illuminate\Database\Seeder;
use App\Alumno;
class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([
            'nombre' => 'Jose',
            'apellido' => 'Deodanes',
            'fechaNacimiento' => '2000-12-12',
            'direccion' => 'San salvador',
            'genero' => 'Masculino',
            'telefono' => 77777777,
            'correo' => 'josedeodanes99@gmail.com',
            'clave' => bcrypt('jose')

        ]);
    }
}
