<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargador extends Model
{
    //
    protected $primaryKey= 'id_cargador';
    protected $table='cargador';
     protected $fillable = ['serial_cargador', 'novedades'];
}
