<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tecnologia;
use App\Models\Frecuencia;

class FrecuenciaTecno extends Model
{
	 protected $table = 'cat_tecnologias_frecuencias';
    	
    	 public function tecnologia()
    {
        return $this->belongsTo(Tecnologia::class,'lng_idtecnologia','id');
    }
        public function frecuencia(){
        return $this->belongsTo(Frecuencia::class,'lng_idfrecuencia', 'id');
    } 
}
