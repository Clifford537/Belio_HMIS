<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Radiologist;
use App\Repositories\BaseRepository;

class RadiologistRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'specialization',
        'phone_number',
        'email',
        'department_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Radiologist::class;
    }
}
