<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Patient extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'patients';

    public $fillable = [
        'gender',
        'phone_number',
        'address',
        'email',
        'blood_group',
        'first_name',
        'surname',
        'other_names',
        'emergency_contact_name',
        'emergency_contact_phone',
        'status',
        'insurance_id',
        'nurse_id',
        'doctor_id'
    ];

    protected $casts = [
        'gender' => 'string',
        'phone_number' => 'string',
        'address' => 'string',
        'email' => 'string',
        'blood_group' => 'string',
        'first_name' => 'string',
        'surname' => 'string',
        'other_names' => 'string',
        'emergency_contact_name' => 'string',
        'emergency_contact_phone' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'gender' => 'required|string|max:100',
        'phone_number' => 'required|nullable|string|max:50',
        'address' => 'required|string|max:50',
        'email' => 'nullable|string|max:50',
        'blood_group' => 'nullable|string|max:10',
        'first_name' => 'nullable|string|max:100',
        'surname' => 'nullable|string|max:100',
        'other_names' => 'nullable|string|max:100',
        'emergency_contact_name' => 'nullable|string|max:100',
        'emergency_contact_phone' => 'nullable|string|max:100',
        'status' => 'nullable|string|max:100',
        'insurance_id' => 'nullable',
        'nurse_id' => 'nullable',
        'doctor_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
    public function insurance()
    {
        return $this->belongsTo(Insurance::class, 'insurance_id');
    }
    public function nurse()
    {
        return $this->belongsTo(Nurse::class, 'nurse_id');
    }

    public function admissions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Admin\Admission::class, 'patient_id');
    }

    public function beds(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Admin\Bed::class, 'patient_id');
    }

    public function radiologyProcedures(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Admin\RadiologyProcedure::class, 'patient_id');
    }

}
