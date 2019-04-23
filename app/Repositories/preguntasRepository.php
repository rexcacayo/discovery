<?php

namespace App\Repositories;

use App\Models\preguntas;
use App\Repositories\BaseRepository;

/**
 * Class preguntasRepository
 * @package App\Repositories
 * @version April 20, 2019, 11:46 am UTC
*/

class preguntasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_cliente',
        'pregunta'
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
        return preguntas::class;
    }
}
