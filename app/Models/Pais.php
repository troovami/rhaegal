<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
	 protected $table = 'cat_paises';
	// se define los valores que se pueden cargar de forma masiva
    protected $fillable=['str_paises'];
    
    
}