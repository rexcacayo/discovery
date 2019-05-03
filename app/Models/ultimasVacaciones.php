<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ultimasVacaciones
 * @package App\Models
 * @version May 1, 2019, 2:42 pm UTC
 *
 * @property string lugar
 * @property string ano_uso
 * @property string costo_noche
 * @property string numero_noche
 * @property string sub_total
 * @property integer cliente_id
 */
class ultimasVacaciones extends Model
{
    use SoftDeletes;

    public $table = 'ultimas_vacaciones';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'lugar',
        'ano_uso',
        'costo_noche',
        'numero_noche',
        'sub_total',
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
        'ano_uso' => 'string',
        'costo_noche' => 'string',
        'numero_noche' => 'string',
        'sub_total' => 'string',
        'cliente_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function clienteUltVac()

    {

        return $this->belongsTo('App\Models\cliente');

    }

    
}
