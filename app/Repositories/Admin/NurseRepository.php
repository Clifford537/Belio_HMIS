<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Nurse;
use App\Repositories\BaseRepository;

class NurseRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'first_name',
        'surname',
        'other_names',
        'gender',
        'date_of_birth',
        'phone_number',
        'address',
        'certification',
        'department_id',
        'shift_id',
        'email'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Nurse::class;
    }
}
