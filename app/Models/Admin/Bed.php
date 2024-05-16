<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    public $table = 'beds';

    public $fillable = [
        'bed_number',
        'occupancy_status',
        'ward_id',
        'bed_type_id',
        'patient_id',
        'bedside_equipment',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'bed_number' => 'string',
        'occupancy_status' => 'boolean',
        'bedside_equipment' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public static array $rules = [
        'bed_number' => 'required|string|max:100',
        'occupancy_status' => 'nullable|boolean',
        'ward_id' => 'nullable',
        'bed_type_id' => 'nullable',
        'patient_id' => 'nullable',
        'bedside_equipment' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function bedType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\BedType::class, 'bed_type_id');
    }

    public function patient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\Patient::class, 'patient_id');
    }

    public function ward(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\Ward::class, 'ward_id');
    }
}
