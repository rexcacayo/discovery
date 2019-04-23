<?php

namespace App\Repositories;

use App\Models\cliente;
use App\Repositories\BaseRepository;

/**
 * Class clienteRepository
 * @package App\Repositories
 * @version April 20, 2019, 6:28 pm UTC
*/

class clienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha',
        'hora',
        'promotor_id',
        'nombreinvitado',
        'nombreconyugue',
        'edadinvitado',
        'edadconyugue',
        'ocupacioninvitado',
        'ocupacionconyugue',
        'activoinvitado',
        'direccion',
        'pais',
        'propietarioclub',
        'aceptoterm',
        'comentarios',
        'tarjetas_id',
        'invitados_id',
        'clubvacacionales_id',
        'propiedadesvacacionales_id'
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
        return cliente::class;
    }
}
