<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class preguntas
 * @package App\Models
 * @version April 20, 2019, 11:46 am UTC
 *
 * @property integer cliente_id
 * @property string pregunta
 */
class preguntas extends Model
{
    use SoftDeletes;

    public $table = 'preguntas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cliente_id',
        'pregunta'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cliente_id' => 'integer',
        'pregunta' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function clientePre()

    {

        return $this->belongsTo('App\Models\cliente');

    }

    
}
