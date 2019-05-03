<?php

namespace App\Repositories;

use App\Models\actualesVacaciones;
use App\Repositories\BaseRepository;

/**
 * Class actualesVacacionesRepository
 * @package App\Repositories
 * @version May 1, 2019, 2:46 pm UTC
*/

class actualesVacacionesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lugar',
        'costo_noche',
        'numero_noche',
        'total',
        'cliente_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return actualesVacaciones::class;
    }
}
