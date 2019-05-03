<?php

namespace App\Repositories;

use App\Models\futurasVacaciones;
use App\Repositories\BaseRepository;

/**
 * Class futurasVacacionesRepository
 * @package App\Repositories
 * @version May 1, 2019, 2:50 pm UTC
*/

class futurasVacacionesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lugar',
        'ano_uso',
        'costo_noche',
        'numero_noche',
        'sub_total',
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
        return futurasVacaciones::class;
    }
}
