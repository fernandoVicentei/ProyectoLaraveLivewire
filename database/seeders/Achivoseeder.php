<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Achivoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('archivos')->insert([
            'titulo'=>'Pedro Picapiedra',
            'autor'=>'Emanuel Zapata',
            'editorial'=>'Los Olivos',
            'fecha'=>'2015-1-2',
            'tipo'=>'INFANTIL'      
            
        ]);
        DB::table('archivos')->insert([
            'titulo'=>'Crepusculo',
            'autor'=>'Ana Valeria',
            'editorial'=>'El bananero',
            'fecha'=>'2010-1-2',
            'tipo'=>'ROMANTICO'            
        ]);

    }
}
