<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class invitados
 * @package App\Models
 * @version April 20, 2019, 12:24 pm UTC
 *
 * @property integer id_cliente
 * @property string nombreinvitado
 */
class invitados extends Model
{
    use SoftDeletes;

    public $table = 'invitados';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_cliente',
        'nombreinvitado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_cliente' => 'integer',
        'nombreinvitado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
