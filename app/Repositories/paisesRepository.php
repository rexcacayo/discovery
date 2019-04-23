<?php

namespace App\Repositories;

use App\Models\paises;
use App\Repositories\BaseRepository;

/**
 * Class paisesRepository
 * @package App\Repositories
 * @version April 21, 2019, 11:56 am UTC
*/

class paisesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'value',
        'letras',
        'pais'
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
        return paises::class;
    }
}
