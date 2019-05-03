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
        'promotor',
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
        'vacacionan',
        'importancia_vacaciones',
        'porque',
        'tipos_vacaciones',
        'porque2',
        'tiempo_reserva',
        'reserva',
        'cuanto_ano',
        'cuanto_noche',
        'ubicacion',
        'internacional',
        'internacional_donde',
        'presentaciones',
        'presentaciones_socio',
        'presentaciones_porque',
        'presentaciones_costo',
        'opinion_sisvacacionales',
        'total3vacacionespasadas',
        'total3vacacionesfuturo',
        'promedio_anual',
        'proyeccion10'
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
