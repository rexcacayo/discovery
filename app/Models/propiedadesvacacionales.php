<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class propiedadesvacacionales
 * @package App\Models
 * @version April 20, 2019, 11:49 am UTC
 *
 * @property integer id_cliente
 * @property string pais
 * @property string nombredesarrollo
 * @property string fechaCompra
 * @property string mantenimiento
 * @property string precio
 * @property string comentario
 */
class propiedadesvacacionales extends Model
{
    use SoftDeletes;

    public $table = 'propiedadesvacacionales';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_cliente',
        'pais',
        'nombredesarrollo',
        'fechaCompra',
        'mantenimiento',
        'precio',
        'comentario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_cliente' => 'integer',
        'pais' => 'string',
        'nombredesarrollo' => 'string',
        'fechaCompra' => 'string',
        'mantenimiento' => 'string',
        'precio' => 'string',
        'comentario' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'mantenimiento' => 'precio string text'
    ];

    
}
