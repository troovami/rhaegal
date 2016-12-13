<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Especificacion;
use App\Models\Versionesmodelo;
class Valoresespecificacion extends Model
{
	 protected $table = 'cat_valores_especificaciones';
    
	     public function especificacion()
    {
        return $this->belongsTo(Especificacion::class,'lng_idespecificacion','id');
    }

     public function version_modelo()
    {
        return $this->belongsToMany('App\Models\Versionesmodelo','tbl_versiones_valores_especificaciones','lng_idvalores_especificaciones','lng_idversion_modelo');
    }

    
}
