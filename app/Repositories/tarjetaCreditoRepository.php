<?php

namespace App\Repositories;

use App\Models\tarjetacredito;
use App\Repositories\BaseRepository;

/**
 * Class tarjetacreditoRepository
 * @package App\Repositories
 * @version April 20, 2019, 12:26 pm UTC
*/

class tarjetacreditoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo',
        'marca',
        'numero',
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
        return tarjetacredito::class;
    }
}
