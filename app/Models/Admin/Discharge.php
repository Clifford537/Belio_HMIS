<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Discharge extends Model
{
    public $table = 'discharges';

    public $fillable = [
        'admission_id',
        'discharge_date',
        'discharge_instructions',
        'discharge_disposition'
    ];

    protected $casts = [
        'discharge_date' => 'datetime',
        'discharge_instructions' => 'string',
        'discharge_disposition' => 'boolean'
    ];

    public static array $rules = [
        'admission_id' => 'nullable',
        'discharge_date' => 'nullable',
        'discharge_instructions' => 'nullable|string|max:100',
        'discharge_disposition' => 'nullable|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
