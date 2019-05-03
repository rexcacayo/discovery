<?php

namespace App\Repositories;

use App\Models\propiedadesvacacionales;
use App\Repositories\BaseRepository;

/**
 * Class propiedadesvacacionalesRepository
 * @package App\Repositories
 * @version April 20, 2019, 11:49 am UTC
*/

class propiedadesvacacionalesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cliente_id',
        'pais',
        'nombredesarrollo',
        'fechaCompra',
        'mantenimiento',
        'precio',
        'comentario'
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
        return propiedadesvacacionales::class;
    }
}
