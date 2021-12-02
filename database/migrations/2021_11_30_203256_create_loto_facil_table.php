<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotoFacilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loto_facil', function (Blueprint $table) {
            $table->id();
            $table->string('concurso');
            $table->string('bolaoUm');
            $table->string('bolaoDois');
            $table->string('bolaoTres');
            $table->string('bolaoOuatro');
            $table->string('bolaoCinco');
            $table->string('bolaoSeis');
            $table->string('bolaoSete');
            $table->string('bolaoOito');
            $table->string('bolaoNove');
            $table->string('bolaoDez');
            $table->string('bolaoOnze');
            $table->string('bolaoDoze');
            $table->string('bolaoTreze');
            $table->string('bolaoQuatorze');
            $table->string('bolaoQuinze');
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
        Schema::dropIfExists('loto_facil');
    }
}
