<?php

namespace App\Repositories;

use App\Models\clubvacacional;
use App\Repositories\BaseRepository;

/**
 * Class clubvacacionalRepository
 * @package App\Repositories
 * @version April 20, 2019, 12:23 pm UTC
*/

class clubvacacionalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_cliente',
        'nombreclub'
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
        return clubvacacional::class;
    }
}
