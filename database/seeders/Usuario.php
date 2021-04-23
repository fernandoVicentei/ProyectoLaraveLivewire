<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'Fulanito',
            'password'=>'Tunene123',
            'email'=>'tunenesito@gmail.com',
            'rol'=>1,                      
            'profile_photo_path'=>'dasdsad4324kl3kl2mksn2lnekenckenlek32n4v3kl25nkl32nln12cl2asasxlankcl23',
        ]);
    }
}
