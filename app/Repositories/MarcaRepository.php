<?php 
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Models\Marca;

class MarcaRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Marca::class;
    }
}