<?php

namespace App\Repositories;

use App\Models\empleados;
use App\Repositories\BaseRepository;

/**
 * Class empleadosRepository
 * @package App\Repositories
 * @version April 23, 2019, 10:42 pm UTC
*/

class empleadosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
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
        return empleados::class;
    }
}
