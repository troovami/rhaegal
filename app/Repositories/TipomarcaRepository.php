<?php 
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Models\Tipomarca;

class TipomarcaRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Tipomarca::class;
    }
}