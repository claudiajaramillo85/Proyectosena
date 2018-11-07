<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo', function (Blueprint $table) {
            $table->increments('id_equipo');
            $table->text('codigo_barras_equipo');
            $table->text('marca_portatil');
            $table->text('referencia_portatil');
            $table->text('serial_portatil');
            $table->text('serial_ cargador');
            $table->text('novedades');
            $table->text('diponibilidad');
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
        Schema::dropIfExists('equipo');
    }
}
