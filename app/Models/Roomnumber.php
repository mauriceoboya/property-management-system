<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Roomnumber
 * @package App\Models
 * @version January 9, 2021, 7:42 pm UTC
 *
 * @property string $roomnumber
 * @property integer $roomtype_id
 */
class Roomnumber extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'roomnumbers';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'roomnumber',
        'roomtype_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'roomnumber' => 'string',
        'roomtype_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'roomnumber' => 'required|string|max:255',
        'roomtype_id' => 'required|integer',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
    public function roomtype(){
        return $this->belongsTo(Roomtype::class);
    }

}
