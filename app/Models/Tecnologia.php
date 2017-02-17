<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Frecuencia;
class Tecnologia extends Model
{
	 protected $table = 'cat_tecnologias';
    

    public function frecuencia(){
        return $this->belongsToMany(Frecuencia::class,'cat_tecnologias_frecuencias', 'lng_idfrecuencia','id');
    }    
}
