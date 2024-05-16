<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $table = 'doctors';

    public $fillable = [
        'date_of_birth',
        'gender',
        'phone_number',
        'address',
        'email',
        'specialization_id',
        'first_name',
        'surname',
        'other_names',
        'department_id',
        'lisence_number',
        'years_of_experience',
        'employment_status_id',
        'shift_id'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'gender' => 'string',
        'phone_number' => 'string',
        'address' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'surname' => 'string',
        'other_names' => 'string',
        'lisence_number' => 'string'
    ];

    public static array $rules = [
        'date_of_birth' => 'required',
        'gender' => 'required|string|max:50',
        'phone_number' => 'nullable|string|max:50',
        'address' => 'nullable|string|max:100',
        'email' => 'nullable|string|max:50',
        'specialization_id' => 'nullable',
        'first_name' => 'required|string|max:300',
        'surname' => 'required|string|max:300',
        'other_names' => 'nullable|string|max:100',
        'department_id' => 'nullable',
        'lisence_number' => 'nullable|string|max:100',
        'years_of_experience' => 'nullable',
        'employment_status_id' => 'nullable',
        'shift_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function admissions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Admin\Admission::class, 'doctor_id');
    }

    public function patients(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Admin\Patient::class, 'doctor_id');
    }

    public function radiologyProcedures(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Admin\RadiologyProcedure::class, 'doctor_id');
    }

    public function theatres(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Admin\Theatre::class, 'doctor_incharge');
    }
}
