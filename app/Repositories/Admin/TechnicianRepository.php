<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Technician;
use App\Repositories\BaseRepository;

class TechnicianRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'first_name',
        'surname',
        'other_names',
        'gender',
        'email',
        'phone_number',
        'address'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Technician::class;
    }
}
