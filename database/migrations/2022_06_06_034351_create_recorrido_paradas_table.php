<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecorridoParadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recorrido_paradas', function (Blueprint $table) {
            $table->id();

            //foraniia de puntos de parada
            $table->unsignedBigInteger('id_parada');
            $table->foreign('id_parada')->references('id')->on('paradas')->onUpdate('cascade')->onDelete('cascade');

            //forania de recorrido
            $table->unsignedBigInteger('id_recorrido');
            $table->foreign('id_recorrido')->references('id')->on('recorridos')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('recorrido_paradas');
    }
}
