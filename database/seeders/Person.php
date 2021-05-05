<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Person extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'nombre'=>'Fulanito',
            'apellidos'=>'Torrico',
            'genero'=>'Masculino',
            'fechanacimiento'=>'2020-1-2',
            'direccion'=>'Av. Los cachis',
            'telefono'=>764543424,            
            'user_id'=>1,
        ]);
       
    }
}
