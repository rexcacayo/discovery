<?php

namespace App\Repositories;

use App\Models\invitados;
use App\Repositories\BaseRepository;

/**
 * Class invitadosRepository
 * @package App\Repositories
 * @version April 20, 2019, 12:24 pm UTC
*/

class invitadosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cliente_id',
        'nombreinvitado'
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
        return invitados::class;
    }
}
