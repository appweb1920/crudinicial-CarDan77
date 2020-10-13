<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Punto extends Model
{
    protected $table='punto';
    protected $fillable=['id','tipoBasura', 'direccion','horaApertura', 'horaCierre'];
}
