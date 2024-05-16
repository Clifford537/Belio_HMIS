<?php

namespace App\Repositories\Admin;

use App\Models\Admin\EmploymentStatus;
use App\Repositories\BaseRepository;

class EmploymentStatusRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return EmploymentStatus::class;
    }
}
