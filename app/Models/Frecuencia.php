<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tecnologia;
class Frecuencia extends Model
{
	 protected $table = 'cat_frecuencias';
    

    public function Tecnologia(){
        return $this->belongsToMany(Tecnologia::class,'cat_tecnologias_frecuencias', 'lng_idtecnologia','id');
    }    
}
