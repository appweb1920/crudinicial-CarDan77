<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recolector extends Model
{
    protected $table='recolector';
    protected $fillable=['id','nombre', 'dias'];
}
