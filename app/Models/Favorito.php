<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Versionesmodelo;
use App\Models\UsuarioSocial;

class Favorito extends Model
{
	 protected $table = 'tbl_favoritos_moviles';
	  protected $fillable = 
	 ['lng_idusuario_social',
	  'lng_idversionesmodelo'];

	  public function version()
    {
        return $this->belongsTo(Versionesmodelo::class,'lng_idversionesmodelo','id');
    }

    public function usuario_social()
    {
        return $this->belongsTo(UsuarioSocial::class,'lng_idusuario_social','id');
    }
    
}
