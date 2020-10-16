<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\detalle;
use App\punto;
use Illuminate\Support\Facades\DB;

class Recolector extends Model
{
    protected $table='recolector';
    protected $fillable=['id','nombre', 'dias'];

    public function getPuntos()
   {
       $puntos = DB::select('SELECT punto.tipoBasura FROM punto
       INNER JOIN detalles ON detalles.id_punto = punto.id
       INNER JOIN recolector ON detalles.id_recolector = recolector.id
       WHERE recolector.id='.$this->id);
       
       return $puntos;
   }
}

