<?php

namespace App\Http\Controllers;


//use Illuminate\Support\Facades\Request; ::


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Collective\Html\Eloquent\FormAccessible;
use App\Models\Favorito;
use App\Models\Modelo;
use App\User;
use App\Models\Pais;
use App\Models\Precio;
use App\Models\Maestro;
use App\Models\UsuarioSocial;
class FavoritosController extends Controller
{
    
    
	public function __construct(){
      $this->middleware('auth');
      $this->beforefilter('@menu',['only'=>['favoritos','eliminar_favoritos']]);

     }

     public function menu(){
       $this->modelo=Modelo::where('lng_idtipo_equipo','=',154 )->groupby('lng_idmarca')->get();

     }
	    public  function favPublicacion($id){
	    $lng_idpersona = \Auth::user()->id;

    	$lng_idusuario_social = UsuarioSocial::where('lng_idpersona','=',$lng_idpersona)->get();

    	if(count($lng_idusuario_social)>0){
    		
    		$id_us = $lng_idusuario_social[0]->id;

    	}else{

    		 $usuario=UsuarioSocial::create([
            'lng_idpersona' => $lng_idpersona,
            'lng_idempresa' => 0,
            'bol_eliminado' => 0
        ]);
    		 $id_us = $usuario->id;

    	}
    	$lng_idfavorito = Favorito::where('lng_idversionesmodelo','=',$id)->where('lng_idusuario_social','=',$id_us)->get();
    	
    	if(count($lng_idfavorito)<1){

    		 $favorito=Favorito::create([
            'lng_idversionesmodelo' => $id,
            'lng_idusuario_social' => $id_us,
            'bol_eliminado' => 0
        ]);
    		
    		    		
    	}else{    	
    		
    		$lng_idfavorito[0]->delete();
    		
    	}
    	return "fav";
    	
    }    

    public function favoritos($cuenta_id){
        ///favorito
    	$lng_idpersona = \Auth::user()->id;
    	$menu=$this->modelo;
    	$id_us = UsuarioSocial::where('lng_idpersona','=',$lng_idpersona)->get();
        if(count($id_us)>0){
    	$lng_idfavorito = Favorito::where('lng_idusuario_social','=',$id_us[0]->id)->paginate(8);
        }else{
            $lng_idfavorito = Favorito::where('lng_idusuario_social','=',0)->paginate(8);
        }
        ///////editar datos
         $id = \Auth::user()->id;
        $user=User::find($id); 
        $pais=Pais::all()->sortBy('str_paises');
        $genero=Maestro::where('str_tipo','=','genero')->get();
        $listado_pub=Precio::where('lng_idusers','=',$id)->paginate(8);
    		
    	return view('modelo/favorito', compact('menu','lng_idfavorito','user','pais','genero','listado_pub','cuenta_id'));

    }


    public function eliminar_favoritos($id){
    	$lng_idpersona = \Auth::user()->id;
 
    	$id_us = UsuarioSocial::where('lng_idpersona','=',$lng_idpersona)->first();

        $lng_idfavorito = Favorito::where('lng_idversionesmodelo','=',$id)->where('lng_idusuario_social','=',$id_us->id)->first();
   
    	if(count($lng_idfavorito)>0){
    	$lng_idfavorito->delete();
        Session::flash('exito', 'Se ha eliminado correctamente el producto de sus favoritos');
        return Redirect::to('Cuenta');
   		 }
         Session::flash('error', 'Lo sentimos, no se logro eliminar el producto');
        return Redirect::to('Cuenta');

    }

        public function eliminar_todo(){
        $lng_idpersona = \Auth::user()->id;
 
        $id_us = UsuarioSocial::where('lng_idpersona','=',$lng_idpersona)->first();

        $lng_idfavorito = Favorito::where('lng_idusuario_social','=',$id_us->id)->get();
   
       for ($i=0; $i<count($lng_idfavorito);$i++){
        $lng_idfavorito[$i]->delete();
        }
        Session::flash('exito', 'Se ha eliminado correctamente el producto de sus favoritos');
        return Redirect::to('Cuenta');

    }

}
