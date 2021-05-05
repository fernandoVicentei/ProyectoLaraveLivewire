<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class empresaseeder extends Seeder
{   
    public function run()
    {
        DB::table('empresas')->insert([
            'id'=>3,
            'nombre'=>'BIBLIIOTECA MX',
            'logo'=>'logo.jpg',
            'colorfondo'=>'#757873',
            'colopanel'=>'#2e2e2e',
            'telefono'=>'Telf 6565543',
            'direccion'=>'Los cachis',            
            'fotoempresa'=>'empresa.jpg',
        ]);

    }
}
