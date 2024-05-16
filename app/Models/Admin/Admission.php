<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    public $table = 'admissions';

    public $fillable = [
        'patient_name',
        'admission_date',
        'doctor_id',
        'reason_for_admission',
        'discharge_status',
        'admission_types_id'
    ];

    protected $casts = [
        'admission_date' => 'datetime',
        'reason_for_admission' => 'string',
        'discharge_status' => 'boolean'
    ];

    public static array $rules = [
        'patient_id' => 'nullable',
        'admission_date' => 'nullable',
        'doctor_id' => 'nullable',
        'reason_for_admission' => 'nullable|string|max:100',
        'discharge_status' => 'nullable|boolean',
        'admission_types_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function admissionTypes(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\AdmissionType::class, 'admission_types_id');
    }

    public function doctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\Doctor::class, 'doctor_id');
    }

    public function patient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\Patient::class, 'patient_id');
    }

    public function billings(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Admin\Billing::class, 'admission_id');
    }
}
