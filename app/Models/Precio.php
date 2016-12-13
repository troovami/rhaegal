<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Modelo;
use App\Models\Versionesmodelo;
class Precio extends Model
{
	 protected $table = 'tbl_modelos_ventas';
    
	    public function versionesmodelo()
    {
        return $this->belongsTo(Versionesmodelo::class,'lng_idversion_modelo','id');
    }


    
}
