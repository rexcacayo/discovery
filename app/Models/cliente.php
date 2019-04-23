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
 * @property integer promotor_id
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
 * @property integer tarjetas_id
 * @property integer invitados_id
 * @property integer clubvacacionales_id
 * @property integer propiedadesvacacionales_id
 */
class cliente extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha',
        'hora',
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
        'comentarios'
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
        'nombreinvitado' => 'string',
        'nombreconyugue' => 'string',
        'edadinvitado' => 'string',
        'edadconyugue' => 'string',
        'ocupacioninvitado' => 'string',
        'ocupacionconyugue' => 'string',
        'activoinvitado' => 'string',
        'direccion' => 'string',
        'pais' => 'string',
        'propietarioclub' => 'string',
        'aceptoterm' => 'string',
        'comentarios' => 'string'
    
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
