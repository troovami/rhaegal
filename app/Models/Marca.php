<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tipomarca;
use App\Models\Marca;
class Marca extends Model
{
	 protected $table = 'cat_marcas';
	// se define los valores que se pueden cargar de forma masiva
    protected $fillable=['str_marca'];
    
	 public function modelos()
    {
        return $this->hasMany(Modelo::class,'lng_idmarca','id');
    }


    
}
