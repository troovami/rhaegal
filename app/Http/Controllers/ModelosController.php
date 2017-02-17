<?php

namespace App\Http\Controllers;


//use Illuminate\Support\Facades\Request; ::


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Collective\Html\Eloquent\FormAccessible;
use App\Models\Modelo;
use App\Models\Versionesmodelo;
use App\Models\Maestro;
use App\Models\Favorito;
use App\Models\Precio;
use App\Models\UsuarioSocial;
use App\Models\Valoresespecificacion;

class ModelosController extends Controller
{

       public function __construct(){
      $this->beforefilter('@menu',['only'=>['index','precio','busqueda','categoria','mas_vendido','colores','detalles']]);
      $this->beforefilter('@relevante',['only'=>['index','precio','busqueda','categoria','mas_vendido','colores']]);

     }
     public function menu(){
       $this->menu=Modelo::where('lng_idtipo_equipo','=',154 )->groupby('lng_idmarca')->get();
     }
      public function relevante(){
       $this->relevante = Modelo::join('tbl_versiones_modelos', 'tbl_versiones_modelos.lng_idmodelo','=','tbl_modelos.id')->
       where('lng_idtipo_equipo','=', 154)->select('tbl_modelos.id', 'tbl_modelos.str_modelo')->
       orderBy('int_cantidad', 'desc')->limit(6)->get();

       $this->color=Maestro::where('str_tipo','=','color')->whereNotIn('id', [362])->get();
     }


    public function index($id_version=null){

      $menu=$this->menu;
      $id=Versionesmodelo::find($id_version);
      $red=Versionesmodelo::join('tbl_frecuencias_tecnos_versiones', 'tbl_versiones_modelos.id','=','tbl_frecuencias_tecnos_versiones.lng_idversion_modelo')->
      join('tbl_frecuencias_tecnos_operadoras','tbl_frecuencias_tecnos_versiones.lng_frec_tecno_oper','=','tbl_frecuencias_tecnos_operadoras.id')->
      join('cat_tecnologias_frecuencias','tbl_frecuencias_tecnos_operadoras.lng_idfrecuencia_tecnologia','=','cat_tecnologias_frecuencias.id')->
      join('cat_tecnologias','cat_tecnologias_frecuencias.lng_idtecnologia','=','cat_tecnologias.id')->
      join('cat_frecuencias','cat_tecnologias_frecuencias.lng_idfrecuencia', '=','cat_frecuencias.id')->
      join('tbl_operadora_pais','tbl_frecuencias_tecnos_operadoras.lng_idoperadora_pais', '=','tbl_operadora_pais.id')->
      join('tbl_operadoras', 'tbl_operadora_pais.lng_idoperadora','=','tbl_operadoras.id')->
       where('tbl_versiones_modelos.id','=', $id_version)->
       where('tbl_operadora_pais.lng_idpais','=', \Auth::user()->lng_idpais )->
        select('tbl_operadoras.str_operadora',
                'tbl_versiones_modelos.str_version',
                'cat_tecnologias.str_especificaciones',
                'cat_frecuencias.str_frecuecia',
                'cat_tecnologias.str_description')->get();

      $color=$this->color;
        // mas vendidos
      $relevante = $this->relevante;
      /////PUBLICACIONES SIMILARES
      if (isset (\Auth::user()->id)){
      $lng_idpersona = \Auth::user()->id;

      $lng_idusuario_social = UsuarioSocial::where('lng_idpersona','=',$lng_idpersona)->get();
      if(count($lng_idusuario_social)>0){
      $id_us = $lng_idusuario_social[0]->id;
      }
      $lng_idfavorito = Favorito::where('lng_idversionesmodelo','=',$id_version)->where('lng_idusuario_social','=',$id_us)->get();
      }
      $similares=Modelo::where('lng_idmarca','=',$id->modelo->marca->id)->orderBy('updated_at','desc')->limit(4)->get();
      return view('modelo/caracteristicas', compact('menu','id','color','relevante','lng_idfavorito','similares','red'));  
    }

    ///////////////////////////listado de precio ////////////////////////////////////////////
    public function precio($id_version=null,$order=null, $name=null){

      $min=Input::get('min');
      $max=Input::get('max');
      if (empty($order)){
        $name='dbl_precio';
        $order='asc';
      }
     // dd($min);
       $menu=$this->menu;
       if(isset($min) or isset($max)){
        if(empty($max)){
          $max=99999999999999999;
        }
        $precio=Precio::where('lng_idversion_modelo','=',$id_version)->where(function($precio) use ($min,$max){
                   $precio->where('dbl_precio','>=',$min)->where('dbl_precio','<=',$max);
              })->orderBy($name, $order)->paginate(16);

       }else{
       $precio=Precio::where('lng_idversion_modelo','=',$id_version)->orderBy($name, $order)->paginate(16);
      }
       // colores 
       $color=$this->color;
      return view('modelo/lista_precio', compact('menu','precio','color','id_version','min','max'));
    }

    public function busqueda(Request $request, $order=null, $name=null){
      // menu //
      $menu=$this->menu;
        // enviar el valor con el cual se realizo la busqueda
      $data=$request->input('busqueda');
       // realiza la busqueda//
       if (empty($order)){
        $name='str_modelo';
        $order='asc';
      }
      $data_busqueda=Modelo::join('cat_marcas','cat_marcas.id','=','tbl_modelos.lng_idmarca')->
       where('lng_idtipo_equipo','=', 154)->where('str_modelo', 'LIKE', '%'.$data.'%')->
       orwhere('str_marca', 'LIKE', '%'.$data.'%')->orderBy($name,$order)->
       select('tbl_modelos.id', 'tbl_modelos.str_modelo')->paginate(16);
       // colores
      $color= $this->color;
         // mas vendidos
      $relevante =  $this->relevante;
       return view('marca/resultado', compact('menu','data_busqueda', 'data','color', 'relevante'));
      
    }

     public function categoria($id_cate=null,$order=null, $name=null){
      // MENU
       $menu=$this->menu;
       // RESULTADO POR CATEGORIA
       if (empty($order)){
        $name='str_modelo';
        $order='asc';
      }
        $relevante = $this->relevante;
        $data_busqueda=Modelo::where('lng_idclasificacion','=',$id_cate)->orderBy($name,$order)->paginate(16);
        $color= $this->color;
       return view('marca/resultado', compact('menu','data_busqueda','color', 'relevante','id_cate'));
    }

       public function mas_vendido($id_vendido=null,$order=null, $name=null){

       $menu=$this->menu;
        if (empty($order)){
        $name='str_modelo';
        $order='asc';
        }
          $data_busqueda=Modelo::join('tbl_versiones_modelos','tbl_versiones_modelos.lng_idmodelo','=','tbl_modelos.id')->
          where('lng_idtipo_equipo','=', 154)->
          where('tbl_versiones_modelos.id','=',$id_vendido)->
          select('tbl_modelos.id', 'tbl_modelos.str_modelo')->orderBy($name,$order)->paginate(16);
        $color=$this->color;

       return view('marca/resultado', compact('menu','data_busqueda', 'color','id_vendido'));
      
    }


     public function colores($id=null){

      $menu=$this->menu;
      $dimension_color=Valoresespecificacion::where('str_titulo','=',$id)->paginate(16);
      $relevante = $this->relevante;
      $color=$this->color;
      return view('marca/resultado_principal', compact('menu','dimension_color','color','relevante'));
      
    }



////////////////////////comparar/////////////////////////
     public function detalles($id=NULL, $id1=NULL, $id2=NULL){
          $menu=$this->menu;
     // echo $request;die;

           $detalles_comp=Versionesmodelo::find($id);
           $detalles_compa=Versionesmodelo::find($id1);
           $detalles_compar=Versionesmodelo::find($id2);


           // obtener caracteristicas a desplegar dependiendo de los moviles
           $columna_distinta=Versionesmodelo::join('tbl_versiones_valores_especificaciones', 'tbl_versiones_valores_especificaciones.lng_idversion_modelo','=','tbl_versiones_modelos.id')->
           join('cat_valores_especificaciones','cat_valores_especificaciones.id','=','tbl_versiones_valores_especificaciones.lng_idvalores_especificaciones')->
           join('cat_especificaciones','cat_especificaciones.id','=','cat_valores_especificaciones.lng_idespecificacion')->
           whereIn('tbl_versiones_modelos.id', array($id,$id1,$id2))->
           select('cat_especificaciones.str_especificacion','cat_valores_especificaciones.str_titulo')->
          groupby('cat_valores_especificaciones.str_titulo')->
           orderBy('cat_valores_especificaciones.id')->get();


      return view('modelo/comparacion', compact('menu','detalles_comp','detalles_compa','detalles_compar','columna_distinta'));
     
    }


/////////////////////////////////////autocompletar/////////////////////////////////////////////////////
  public function autocomplet(Request $request)
    {

    $search = $request->input('autocomplete');

    $query=Modelo::join('cat_marcas','cat_marcas.id','=','tbl_modelos.lng_idmarca')->
    join('tbl_versiones_modelos', 'tbl_modelos.id', '=' , 'tbl_versiones_modelos.lng_idmodelo')->
    where('lng_idtipo_equipo','=', 154)->where(DB::raw("CONCAT(str_marca,' ', str_modelo)"), 'LIKE', '%'.$search.'%')->
    select('tbl_versiones_modelos.id', DB::raw("CONCAT(str_marca,' ', str_modelo,' version ',str_version) as str_modelo"))->limit(5)->get();
       
    return response()->json($query);
      
    }
    
 
}
