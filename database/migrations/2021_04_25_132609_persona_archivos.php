<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonaArchivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('persona_archivos', function (Blueprint $table) {
            $table->foreignId('idarchivo');
            $table->foreign('idarchivo')->references('id')->on('archivos')->onDelete('cascade');
            $table->foreignId('idpersona');
            $table->foreign('idpersona')->references('id')->on('personas')->onDelete('cascade');
            $table->primary(['idarchivo','idpersona']);     
             $table->timestamps();
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
