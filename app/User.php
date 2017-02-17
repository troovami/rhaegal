<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\Models\Pais;
use App\Models\UsuarioSocial;


class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_personas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'str_nombre','str_apellido','email','dmt_fecha_nacimiento','lng_idgenero', 'password','str_twitter','str_facebook','str_instagram','str_telefono','type_document','str_ididentificacion','lng_idpais'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    ////funcion que permite modificar la contraseña

    public function setPasswordAttribute($valor){
        if(!empty($valor)){
            $this->attributes['password']= \Hash::make($valor);
        }
    }

        public function pais()
    {
        return $this->belongsTo(Pais::class,'lng_idpais','id');
    }
         public function favorito()
    {
        return $this->hasMany(UsuarioSocial::class,'lng_idpersona','id');
    }
}
