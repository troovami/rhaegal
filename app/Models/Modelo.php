<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Marca;

use App\Models\Tipomarca;
use App\Models\Versionesmodelo;
class Modelo extends Model
{
	 protected $table = 'tbl_modelos';
    
	    public function marca()
    {
        return $this->belongsTo(Marca::class,'lng_idmarca','id');
    }


    public function tipo()
    {
        return $this->belongsTo(TipoModelo::class,'lng_idclasificacion','id');
    }

     public function version()
    {
        return $this->hasMany(Versionesmodelo::class,'lng_idmodelo','id');
    }

  

    
}
