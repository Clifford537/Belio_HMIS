<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Physician extends Model
{
    public $table = 'physicians';

    public $fillable = [
        'first_name',
        'surname',
        'other_names',
        'specialty',
        'address',
        'clinic_hospital',
        'procedure_id'
    ];

    protected $casts = [
        'first_name' => 'string',
        'surname' => 'string',
        'other_names' => 'string',
        'specialty' => 'string',
        'address' => 'string',
        'clinic_hospital' => 'string'
    ];

    public static array $rules = [
        'first_name' => 'nullable|string|max:100',
        'surname' => 'nullable|string|max:100',
        'other_names' => 'nullable|string|max:100',
        'specialty' => 'nullable|string|max:100',
        'address' => 'nullable|string|max:100',
        'clinic_hospital' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'procedure_id' => 'nullable'
    ];

    public function procedure(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\RadiologyProcedure::class, 'procedure_id');
    }
}
