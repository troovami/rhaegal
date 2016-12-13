<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request; ::
use Illuminate\Pagination\Paginator;
use App\Repositories\MarcaRepository;
use App\Repositories\TipomarcaRepository;
use App\Repositories\ModeloRepository;
use App\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Collective\Html\Eloquent\FormAccessible;
use App\Models\Modelo;
use App\Models\Versionesmodelo;
use App\Models\Precio;
class MarcasController extends Controller
{

	private $rMarca;
	private $rTipomarca;
	private $rModelo;

    public function __construct(MarcaRepository $repoMarca, TipomarcaRepository $repoTipomarca, ModeloRepository $repoModelo ){
      $this->rMarca=$repoMarca;
      $this->rTipomarca=$repoTipomarca;
      $this->rModelo=$repoModelo;

    }
     
    public function index(){

    	$menu=$this->rModelo->findByField('lng_idtipo_equipo',154)->groupby('lng_idmarca');
        return view('index', compact('menu'));

    }

    public function index1($id=null){
    	$menu=$this->rModelo->findByField('lng_idtipo_equipo',154)->groupby('lng_idmarca');
        // MOSTRAR LAS MARCAS
        if ($id=='{id}'){
        	
        }
        $marcas = Modelo::where('lng_idmarca', '=', $id)->where('lng_idtipo_equipo','=',154 )->paginate(16);  
        $id=$this->rMarca->find($id);
    	return view('marca/moviles', compact('menu','id','marcas'));
    }

      public function prueba($id=null, $order=null, $name=null){
       if ($name=='dbl_precio'){
             $marcas = Modelo::where('lng_idmarca', '=', $id)->where('lng_idtipo_equipo','=',154 )->get();
             $marcas=$marcas[0]->version()->get();
             $marcas=$marcas[0]->precio()->orderBy($name, $order)->paginate();
            dd($marcas);

        }else{
            $marcas = Modelo::where('lng_idmarca', '=', $id)->where('lng_idtipo_equipo','=',154 )->orderBy($name, $order)->paginate(16);
            }
        return view('marca/ordenar_movil', compact('marcas'));
    }

    public function somos(){
        $menu=$this->rModelo->findByField('lng_idtipo_equipo',154)->groupby('lng_idmarca');
        return view('contactos/quienes_somos', compact('menu'));
    }





}

