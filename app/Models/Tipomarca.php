<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Modelo;
use App\Models\Tipomarca;

class Tipomarca extends Model
{
	 protected $table = 'cat_datos_maestros';
	// se define los valores que se pueden cargar de forma masiva
     
	  public function modelos()
    {
        return $this->hasMany(Modelo::class,'lng_idtipo_equipo','id');
    }

    
}
