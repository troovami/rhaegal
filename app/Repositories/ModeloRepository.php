<?php 
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Models\Modelo;

class ModeloRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Modelo::class;
    }
}