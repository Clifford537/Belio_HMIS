<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Doctor;
use App\Repositories\BaseRepository;

class DoctorRepository extends BaseRepository
{
    protected $fieldSearchable = [
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

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Doctor::class;
    }
}
