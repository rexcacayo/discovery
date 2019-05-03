<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class clubvacacional
 * @package App\Models
 * @version April 20, 2019, 12:23 pm UTC
 *
 * @property integer cliente_id
 * @property string nombreclub
 */
class clubvacacional extends Model
{
    use SoftDeletes;

    public $table = 'clubvacacionals';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cliente_id',
        'nombreclub'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cliente_id' => 'integer',
        'nombreclub' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function clienteVac()

    {

        return $this->belongsTo('App\Models\cliente');

    }
    

    
}
