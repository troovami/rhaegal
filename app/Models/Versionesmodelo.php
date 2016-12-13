<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Modelo;
use App\Models\Precio;
use App\Models\Valoresespecificacion;
class Versionesmodelo extends Model
{
	 protected $table = 'tbl_versiones_modelos';
    
	    public function modelo()
    {
        return $this->belongsTo(Modelo::class,'lng_idmodelo','id');
    }

     public function precio()
    {
        return $this->hasMany(Precio::class,'lng_idversion_modelo','id');
    }
    public function valores_especificacion()
    {
        return $this->belongsToMany('App\Models\Valoresespecificacion','tbl_versiones_valores_especificaciones','lng_idversion_modelo','lng_idvalores_especificaciones');
    }
}
