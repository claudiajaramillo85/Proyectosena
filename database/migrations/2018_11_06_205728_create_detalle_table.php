<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle', function (Blueprint $table) {
            $table->increments('id_detalle');

            $table->unsignedInteger('id_prestamo');
            $table->foreign('id_prestamo')->references('id_prestamo')->on('prestamo');

            $table->unsignedInteger('id_equipo');
            $table->foreign('id_equipo')->references('id_equipo')->on('equipo');

            $table->unsignedInteger('id_cargador');
            $table->foreign('id_cargador')->references('id_cargador')->on('cargador');
            
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
        Schema::dropIfExists('detalle');
    }
}
