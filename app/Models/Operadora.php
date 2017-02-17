<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pais;
use App\Models\OperadorPais;

class Operadora extends Model
{
	 protected $table = 'tbl_operadoras';
    
        public function pais()
    {
        return $this->belongsToMany(Pais::class,'tbl_operadora_pais','lng_idpais','id');
    }
       public function operadora_pais()
    {
        return $this->belongsTo(OperadorPais::class,'lng_idoperadora','id');
    }
    
}
