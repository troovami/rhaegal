<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Collective\Html\Eloquent\FormAccessible;
//incorporar redirect to y session
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Models\Pais;
use App\Models\Maestro;

class UsuarioController extends Controller
{
   public function __construct(){
    $this->middleware('auth');
    /////si quiero indicar un solo controlador $this->middleware('auth',['only'=>'update']);
   }

     public function update(request $request)
    {
      $user=User::find(\Auth::user()->id);
       $user->blb_img =base64_encode(file_get_contents($request['blb_img']));
       $user->fill($request->all());
       $user->save();
       Session::flash('exito','Usuario actualizado correctamente');
        return Redirect::to('Cuenta/Datos');
    }

     
}