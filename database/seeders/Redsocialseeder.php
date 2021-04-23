<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Redsocialseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('redsocials')->insert([
            'nombrered'=>'Facebook',
            'dominio'=>'www.facebook.com',
        ]);
        DB::table('redsocials')->insert([
            'nombrered'=>'Twitter',
            'dominio'=>'www.twitter.com',
        ]);
        DB::table('redsocials')->insert([
            'nombrered'=>'Instagram',
            'dominio'=>'www.instagram.com',
        ]);
    }
}
