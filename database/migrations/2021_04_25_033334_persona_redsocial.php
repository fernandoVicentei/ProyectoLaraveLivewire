<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonaRedsocial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('persona_redsocial', function (Blueprint $table) {
           $table->foreignId('idredsocial');
           $table->foreign('idredsocial')->references('id')->on('redsocials')->onDelete('cascade');
           $table->foreignId('idpersona');
           $table->foreign('idpersona')->references('id')->on('personas')->onDelete('cascade');
           $table->primary(['idredsocial','idpersona']);     
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
