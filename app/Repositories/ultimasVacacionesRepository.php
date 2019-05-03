<?php

namespace App\Repositories;

use App\Models\ultimasVacaciones;
use App\Repositories\BaseRepository;

/**
 * Class ultimasVacacionesRepository
 * @package App\Repositories
 * @version May 1, 2019, 2:42 pm UTC
*/

class ultimasVacacionesRepository extends BaseRepository
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
        return ultimasVacaciones::class;
    }
}
