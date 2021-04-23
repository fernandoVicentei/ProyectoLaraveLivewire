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
        DB::table('personas')->insert([
            'nombre'=>'Pepito',
            'apellidos'=>'Perez',
            'genero'=>'Masculino',
            'fechanacimiento'=>'1999-1-2',
            'direccion'=>'Av. Los cachivaches',
            'telefono'=>79865354,            
            'user_id'=>1,
        ]);
        DB::table('personas')->insert([
            'nombre'=>'Rosa',
            'apellidos'=>'Filomena',
            'genero'=>'Femenino',
            'fechanacimiento'=>'2001-5-1',
            'direccion'=>'Av. Salon Gloria',
            'telefono'=>76485324,            
            'user_id'=>1,
        ]);
        DB::table('personas')->insert([
            'nombre'=>'Zorrayda',
            'apellidos'=>'Perez',
            'genero'=>'Femenino',
            'fechanacimiento'=>'201-6-1',
            'direccion'=>'Av. Las Americas',
            'telefono'=>67542423,            
            'user_id'=>1,
        ]);
        DB::table('personas')->insert([
            'nombre'=>'Andres',
            'apellidos'=>'Zambrana',
            'genero'=>'Masculino',
            'fechanacimiento'=>'2000-12-2',
            'direccion'=>'Av. Los cachis',
            'telefono'=>43535245,            
            'user_id'=>1,
        ]);
    }
}
