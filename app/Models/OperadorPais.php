<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pais;
use App\Models\Operadora;
use App\Models\TecnOperadora;

class OperadorPais extends Model
{
	 protected $table = 'tbl_operadora_pais';

	 public function pais()
    {
        return $this->belongsTo(Pais::class,'lng_idpais','id');
    }
    	 public function operadora()
    {
        return $this->belongsTo(Operadora::class,'lng_idoperadora','id');
    }

       public function tecno()
    {
        return $this->hasMany(TecnOperadora::class,'lng_idoperadora_pais','id');
    }



    
    
}
