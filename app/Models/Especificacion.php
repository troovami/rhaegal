<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Valoresespecificacion;

class Especificacion extends Model
{
	 protected $table = 'cat_especificaciones';
    
	 
	 public function valoresespecificacion()
    {
        return $this->hasMany(Valoresespecificacion::class,'lng_idespecificacion','id');
    }

    
}
