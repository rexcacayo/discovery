<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class actualesVacaciones
 * @package App\Models
 * @version May 1, 2019, 2:46 pm UTC
 *
 * @property string lugar
 * @property string costo_noche
 * @property string numero_noche
 * @property string total
 * @property integer cliente_id
 */
class actualesVacaciones extends Model
{
    use SoftDeletes;

    public $table = 'actuales_vacaciones';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'lugar',
        'costo_noche',
        'numero_noche',
        'total',
        'cliente_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'lugar' => 'string',
        'costo_noche' => 'string',
        'numero_noche' => 'string',
        'total' => 'string',
        'cliente_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function clienteActVac()

    {

        return $this->belongsTo('App\Models\cliente');

    }

    
}
