<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo', function (Blueprint $table) {
            $table->increments('id_prestamo');
            $table->unsignedInteger('id_instructor');
            $table->foreign('id_instructor')->references('id_instructor')->on('instructor');
            $table->text('codigo_barras_equipo');
            $table->text('disponibilidad_equipo');
            $table->text('fecha_prestamo');
            $table->text('fecha_devolucion');
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
        Schema::dropIfExists('prestamo');
    }
}
