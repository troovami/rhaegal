<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use App\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Collective\Html\Eloquent\FormAccessible;
use App\Models\Modelo;
use App\Models\Marca;
use App\Models\Versionesmodelo;
use App\Models\Precio;
use App\Models\Maestro;
class MarcasController extends Controller
{

     public function __construct(){
      $this->beforefilter('@menu',['only'=>['index','index1','somos']]);
      $this->beforefilter('@relevante',['only'=>['index','index1']]);

     }

     public function menu(){
       $this->modelo=Modelo::where('lng_idtipo_equipo','=',154 )->groupby('lng_idmarca')->get();

     }

      public function relevante(){
       $this->relevante = Modelo::join('tbl_versiones_modelos', 'tbl_versiones_modelos.lng_idmodelo','=','tbl_modelos.id')->
       where('lng_idtipo_equipo','=', 154)->select('tbl_modelos.id', 'tbl_modelos.str_modelo')->
       orderBy('int_cantidad', 'desc')->limit(6)->get();

       $this->color=Maestro::where('str_tipo','=','color')->whereNotIn('id', [362])->get();

     }

    public function index(){

      $menu=$this->modelo;
      $reciente= Precio::orderBy('created_at','DESC')->limit(12)->get();
      $relevante =  $this->relevante;

      return view('index', compact('menu','relevante', 'reciente'));
    }

    public function index1($id=null,$order=null, $name=null){
    	$menu=$this->modelo;
    
      if ($name==null){
        $name='str_modelo';
        $order='asc';
                     }
      $marcas = Modelo::where('lng_idmarca', '=', $id)->where('lng_idtipo_equipo','=',154 )->orderBy($name, $order)->paginate(16);
      $id=Marca::find($id);
        //color
      $color=$this->color;
       // mas vendidos
      $relevante =  $this->relevante;
    	return view('marca/moviles', compact('menu','id','marcas','color', 'relevante'));
    }


    public function somos(){
         $menu=$this->modelo;
        return view('contactos/quienes_somos', compact('menu'));
    }





}

