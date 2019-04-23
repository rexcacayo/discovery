<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class preguntas
 * @package App\Models
 * @version April 20, 2019, 11:46 am UTC
 *
 * @property integer id_cliente
 * @property string pregunta
 */
class preguntas extends Model
{
    use SoftDeletes;

    public $table = 'preguntas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_cliente',
        'pregunta'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_cliente' => 'integer',
        'pregunta' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
