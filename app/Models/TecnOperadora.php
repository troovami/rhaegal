<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OperadorPais;
use App\Models\Versionesmodelo;
use App\Models\FrecuenciaTecno;

class TecnOperadora extends Model
{
	 protected $table = 'tbl_frecuencias_tecnos_operadoras';
    	
    	 public function operadora_pais()
    {
        return $this->belongsTo(OperadorPais::class,'lng_idoperadora_pais','id');
    }

      public function tecnofrecuencia()
    {
        return $this->belongsTo(FrecuenciaTecno::class,'lng_idfrecuencia_tecnologia','id');
    }
}
