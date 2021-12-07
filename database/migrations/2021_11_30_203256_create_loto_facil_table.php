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
            $table->string('bolaUm');
            $table->string('bolaDois');
            $table->string('bolaTres');
            $table->string('bolaQuatro');
            $table->string('bolaCinco');
            $table->string('bolaSeis');
            $table->string('bolaSete');
            $table->string('bolaOito');
            $table->string('bolaNove');
            $table->string('bolaDez');
            $table->string('bolaOnze');
            $table->string('bolaDoze');
            $table->string('bolaTreze');
            $table->string('bolaQuatorze');
            $table->string('bolaQuinze');
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
