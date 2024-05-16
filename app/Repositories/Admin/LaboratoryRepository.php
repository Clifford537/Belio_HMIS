<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Laboratory;
use App\Repositories\BaseRepository;

class LaboratoryRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'department_id',
        'location',
        'status',
        'equipments_id',
        'technician_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Laboratory::class;
    }
}
