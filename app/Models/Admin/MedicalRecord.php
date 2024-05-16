<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    public $table = 'medical_records';

    public $fillable = [
        'visit_date',
        'medical_history',
        'diagnoses',
        'treatments',
        'lab_results',
        'imaging_studies',
        'progress_notes',
        'patient_id',
        'nurse_id',
        'doctor_id'
    ];

    protected $casts = [
        'visit_date' => 'datetime',
        'medical_history' => 'string',
        'diagnoses' => 'string',
        'treatments' => 'string',
        'lab_results' => 'string',
        'imaging_studies' => 'string',
        'progress_notes' => 'string'
    ];

    public static array $rules = [
        'visit_date' => 'nullable',
        'medical_history' => 'nullable|string|max:600',
        'diagnoses' => 'nullable|string|max:600',
        'treatments' => 'nullable|string|max:600',
        'lab_results' => 'nullable|string|max:600',
        'imaging_studies' => 'nullable|string|max:600',
        'progress_notes' => 'nullable|string|max:600',
        'patient_id' => 'nullable',
        'nurse_id' => 'nullable',
        'doctor_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
