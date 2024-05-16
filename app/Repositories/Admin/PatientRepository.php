<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Patient;
use App\Repositories\BaseRepository;

class PatientRepository extends BaseRepository
{
    protected $fieldSearchable = [
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

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Patient::class;
    }
}
