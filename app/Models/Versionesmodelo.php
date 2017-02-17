<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Modelo;
use App\Models\Precio;
use App\Models\Valoresespecificacion;
use App\Models\Favorito;
use App\Models\TecnOperadora;

class Versionesmodelo extends Model
{
	 protected $table = 'tbl_versiones_modelos';
    
	    public function modelo()
    {
        return $this->belongsTo(Modelo::class,'lng_idmodelo','id');
    }
    public function tecnologia()
    {
    return $this->belongsToMany(TecnOperadora::class,'tbl_frecuencias_tecnos_versiones','lng_idversion_modelo','lng_frec_tecno_oper');
    }    

     public function precio()
    {
        return $this->hasMany(Precio::class,'lng_idversion_modelo','id');
    }
    public function valores_especificacion()
    {
        return $this->belongsToMany(Valoresespecificacion::class,'tbl_versiones_valores_especificaciones','lng_idversion_modelo','lng_idvalores_especificaciones');
    }
       public function favorito()
    {
        return $this->hasMany(Favorito::class,'lng_idversionesmodelo','id');
    }


}
