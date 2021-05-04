<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class Empresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('empresas', function (Blueprint $table) {
             $table->id();
             $table->string('nombre')->nullable();
             $table->text('logo')->nullable();
             $table->string('colorfondo');
             $table->string('colopanel');
             $table->string('telefono');
             $table->string('direccion');
             $table->text('fotoempresa')->nullable();
         });
    }    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
