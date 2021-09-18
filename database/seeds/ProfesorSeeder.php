<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesors')->insert([
            'nombre' => 'Jorge',
            'apellido' => 'Coto',
            'dui' => '738478374-0',
            'telefono' => 7774785,
            'correo' => 'coto@admin',
            'clave' => bcrypt('coto')
        ]);
    }
}
