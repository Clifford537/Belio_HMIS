<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class RadiologyProcedure extends Model
{
    public $table = 'radiology_procedures';

    public $fillable = [
        'patient_id',
        'procedure_code',
        'procedure_date',
        'description',
        'doctor_id',
        'radiologist_name',
        'procedure_notes',
        'procedure_results',
        'procedure_cost',
        'insurance_id',
        'procedure_location',
        'theatre_id'
    ];

    protected $casts = [
        'procedure_code' => 'string',
        'procedure_date' => 'date',
        'description' => 'string',
        'radiologist_name' => 'string',
        'procedure_notes' => 'string',
        'procedure_results' => 'string',
        'procedure_cost' => 'decimal:0',
        'procedure_location' => 'string'
    ];

    public static array $rules = [
        'patient_id' => 'nullable',
        'procedure_code' => 'nullable|string|max:50',
        'procedure_date' => 'nullable',
        'description' => 'nullable|string|max:100',
        'doctor_id' => 'nullable',
        'radiologist_name' => 'nullable|string|max:100',
        'procedure_notes' => 'nullable|string|max:600',
        'procedure_results' => 'nullable|string|max:100',
        'procedure_cost' => 'nullable|numeric',
        'insurance_id' => 'nullable',
        'procedure_location' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'theatre_id' => 'nullable'
    ];

    
}
