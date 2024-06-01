<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    public $table = 'admissions';

    public $fillable = [
        'patient_id',
        'admission_date',
        'doctor_id',
        'reason_for_admission',
        'discharge_status',
        'admission_types_id'
    ];

    protected $casts = [
        'admission_date' => 'datetime',
        'reason_for_admission' => 'string',
        'discharge_status' => 'string'
    ];

    public static array $rules = [
        'patient_id' => 'nullable',
        'admission_date' => 'nullable',
        'doctor_id' => 'nullable',
        'reason_for_admission' => 'nullable|string|max:100',
        'discharge_status' => 'nullable|string|max:100',
        'admission_types_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function admissionTypes()
    {
        return $this->belongsTo(AdmissionType::class, 'admission_types_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function billings(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Admin\Billing::class, 'admission_id');
    }

    public function getAdmissionDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }
}
