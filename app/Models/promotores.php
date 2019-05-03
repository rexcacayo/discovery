<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class promotores
 * @package App\Models
 * @version April 20, 2019, 9:23 pm UTC
 *
 * @property string name
 * @property string area
 */
class promotores extends Model
{
    use SoftDeletes;

    public $table = 'promotores';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'area'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'area' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

        
}
