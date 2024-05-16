<?php

namespace App\Repositories\Admin;

use App\Models\Admin\NextOfKin;
use App\Repositories\BaseRepository;

class NextOfKinRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'first_name',
        'surname',
        'other_names',
        'gender',
        'phone_number',
        'address',
        'email',
        'patient_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return NextOfKin::class;
    }
}
