<?php

namespace App\Http\Controllers;


//use Illuminate\Support\Facades\Request; ::

use App\Repositories\MarcaRepository;
use App\Repositories\TipomarcaRepository;
use App\Repositories\ModeloRepository;
use App\Repositories\VersionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Collective\Html\Eloquent\FormAccessible;
use App\Models\Modelo;
use App\Models\Versionesmodelo;

class ModelosController extends Controller
{

	private $rMarca;
	private $rTipomarca;
	private $rModelo;
  private $rVersion;

    public function __construct(MarcaRepository $repoMarca, TipomarcaRepository $repoTipomarca, ModeloRepository $repoModelo, VersionRepository $repoVersion ){
      $this->rMarca=$repoMarca;
      $this->rTipomarca=$repoTipomarca;
      $this->rModelo=$repoModelo;
      $this->rVersion=$repoVersion;

    }

    public function index($id_version=null){

    	$menu=$this->rModelo->findByField('lng_idtipo_equipo',154)->groupby('lng_idmarca');
       $id=$this->rVersion->find($id_version);
       $detalles=$this->rVersion->find($id_version);
    	return view('modelo/caracteristicas', compact('menu','id','detalles'));

    	
    }

    public function busqueda(Request $request){
      $menu=$this->rModelo->findByField('lng_idtipo_equipo',154)->groupby('lng_idmarca');
       $marcas=Modelo::where('lng_idtipo_equipo',154)->where ('str_modelo', 'LIKE', '%'.$request->input('busqueda').'%')->paginate(16);
        $cantidad=Modelo::where('lng_idtipo_equipo',154)->where ('str_modelo', 'LIKE', '%'.$request->input('busqueda').'%')->count();
       return view('marca/resultado', compact('menu','marcas','cantidad'));
      
    }

     public function categoria($id=null){
      $menu=$this->rModelo->findByField('lng_idtipo_equipo',154)->groupby('lng_idmarca');
       //$marcas=$this->rModelo->findByField('lng_idclasificacion', $id);
       $marcas=Modelo::where('lng_idclasificacion',$id)->paginate(16);
       $cantidad=$this->rModelo->findByField('lng_idclasificacion', $id)->count();
       return view('marca/resultado', compact('menu','marcas','cantidad'));
      
    }

}

