<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle extends Model
{
    protected $table='detalles';
    protected $fillable=['id','id_recolector', 'id_punto'];
}
