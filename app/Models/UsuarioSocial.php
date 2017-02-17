<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UsuarioSocial extends Model
{
	 protected $table = 'tbl_usuarios_sociales';
	 protected $fillable = 
	 ['lng_idpersona',
	  'lng_idempresa'];

       public function usuario()
    {
        return $this->belongsTo(User::class,'lng_idpersona','id');
    } 
}
