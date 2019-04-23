<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class paises
 * @package App\Models
 * @version April 21, 2019, 11:56 am UTC
 *
 * @property integer value
 * @property string letras
 * @property string pais
 */
class paises extends Model
{
    use SoftDeletes;

    public $table = 'paises';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'value',
        'letras',
        'pais'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'value' => 'integer',
        'letras' => 'string',
        'pais' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
