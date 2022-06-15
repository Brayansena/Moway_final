<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecorridosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recorridos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_ruta');
            $table->integer('numero_ruta');
            $table->text('url_recorrido');
            $table->text('imagen_recorrido');

             //foreing de horario
            $table->unsignedBigInteger('id_horario');
            $table->foreign('id_horario')->references('id')->on('horarios')->onUpdate('cascade')->onDelete('cascade');

             //foreing de empresa
            $table->unsignedBigInteger('id_empresa');
            $table->foreign('id_empresa')->references('id')->on('empresas')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('recorridos');
    }
}
