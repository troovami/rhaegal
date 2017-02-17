<?php 
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Models\Precio;

class PrecioRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Precio::class;
    }
}