<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class cliente
 * @package App\Models
 * @version April 20, 2019, 6:28 pm UTC
 *
 * @property string fecha
 * @property string hora
 * @property string promotor
 * @property string nombreinvitado
 * @property string nombreconyugue
 * @property string edadinvitado
 * @property string edadconyugue
 * @property string ocupacioninvitado
 * @property string ocupacionconyugue
 * @property string activoinvitado
 * @property string direccion
 * @property string pais
 * @property string propietarioclub
 * @property string aceptoterm
 * @property string comentarios
 * @property string vacacionan
 * @property string importancia_vacaciones
 * @property string porque
 * @property string tipos_vacaciones
 * @property string porque2
 * @property string tiempo_reserva
 * @property string reserva
 * @property string cuanto_ano
 * @property string cuanto_noche
 * @property string ubicacion'
 * @property string internacional
 * @property string internacional_donde
 * @property string presentaciones
 * @property string presentaciones_socio
 * @property string presentaciones_porque
 * @property string presentaciones_costo
 * @property string opinion_sisvacacionales
 * @property string total3vacacionespasadas
 * @property string total3vacacionesfuturo
 * @property string promedio_anual
 * @property string proyeccion10
 * @property integer abierto
 */
class cliente extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
        'activoconyugue',
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
        'proyeccion10',
        'abierto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha' => 'string',
        'hora' => 'string',
        'promotor' => 'string',
        'nombreinvitado' => 'string',
        'nombreconyugue' => 'string',
        'edadinvitado' => 'string',
        'edadconyugue' => 'string',
        'ocupacioninvitado' => 'string',
        'ocupacionconyugue' => 'string',
        'activoinvitado' => 'string',
        'activoconyugue' => 'string',
        'direccion' => 'string',
        'pais' => 'string',
        'propietarioclub' => 'string',
        'aceptoterm' => 'string',
        'comentarios' => 'string',
        'vacacionan' => 'string',
        'importancia_vacaciones' => 'string',
        'porque' => 'string',
        'tipos_vacaciones' => 'string',
        'porque2' => 'string',
        'tiempo_reserva' => 'string',
        'reserva' => 'string',
        'cuanto_ano' => 'string',
        'cuanto_noche' => 'string',
        'ubicacion' => 'string',
        'internacional' => 'string',
        'internacional_donde' => 'string',
        'presentaciones' => 'string',
        'presentaciones_socio' => 'string',
        'presentaciones_porque' => 'string',
        'presentaciones_costo' => 'string',
        'opinion_sisvacacionales' => 'string',
        'total3vacacionespasadas' => 'string',
        'total3vacacionesfuturo' => 'string',
        'promedio_anual' => 'string',
        'proyeccion10' => 'string',
        'abierto' => 'integer'
    
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function tarjeta()

    {

        return $this->hasMany('App\Models\tarjetacredito');

    }

    public function ultimasVac()

    {

        return $this->hasMany('App\Models\ultimasVacaciones');

    }

    public function propiedadesVac()

    {

        return $this->hasMany('App\Models\propiedadesvacacionales');

    }

    public function preguntas()

    {

        return $this->hasMany('App\Models\preguntas');

    }

    public function invitados()

    {

        return $this->hasMany('App\Models\invitados');

    }

    public function futurasVac()

    {

        return $this->hasMany('App\Models\futurasVacaciones');

    }

    public function clubvacacional()

    {

        return $this->hasMany('App\Models\clubvacacional');

    }

    public function actualVac()

    {

        return $this->hasMany('App\Models\actualesVacaciones');

    }

    

}
