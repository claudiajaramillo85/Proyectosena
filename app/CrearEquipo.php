<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrearEquipo extends Model
{
    //
    protected $primaryKey= 'id_equipo';
    protected $table='equipo';
     protected $fillable = ['codigo_barras_equipo', 'marca_portatil', 'referencia_portatil','serial_portatil','serial_cargador', 'novedades', 'disponibilidad'];
}
