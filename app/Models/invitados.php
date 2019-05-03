<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class invitados
 * @package App\Models
 * @version April 20, 2019, 12:24 pm UTC
 *
 * @property integer cliente_id
 * @property string nombreinvitado
 */
class invitados extends Model
{
    use SoftDeletes;

    public $table = 'invitados';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cliente_id',
        'nombreinvitado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cliente_id' => 'integer',
        'nombreinvitado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function clienteInv()

    {

        return $this->belongsTo('App\Models\cliente');

    }

    
}
