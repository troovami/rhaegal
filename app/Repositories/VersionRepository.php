<?php 
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Models\Versionesmodelo;

class VersionRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Versionesmodelo::class;
    }
}