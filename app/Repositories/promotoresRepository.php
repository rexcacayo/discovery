<?php

namespace App\Repositories;

use App\Models\promotores;
use App\Repositories\BaseRepository;

/**
 * Class promotoresRepository
 * @package App\Repositories
 * @version April 20, 2019, 9:23 pm UTC
*/

class promotoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'area'
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
        return promotores::class;
    }
}
