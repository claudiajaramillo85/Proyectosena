<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    //
    protected $primaryKey= 'id_instructor';
    protected $table='instructor';
     protected $fillable = ['nombre', 'apellido', 'cedula', 'email'];
}
