<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tarjetacredito
 * @package App\Models
 * @version April 20, 2019, 12:26 pm UTC
 *
 * @property string tipo
 * @property string marca
 * @property integer numero
 * @property integer cliente_id
 */
class tarjetacredito extends Model
{
    use SoftDeletes;

    public $table = 'tarjetacreditos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tipo',
        'marca',
        'numero',
        'cliente_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipo' => 'string',
        'marca' => 'string',
        'numero' => 'string',
        'cliente_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    
    public function clienteTar()

    {

        return $this->belongsTo('App\Models\cliente');

    }
    
}
