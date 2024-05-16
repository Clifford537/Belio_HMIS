<?php

namespace App\Repositories\Admin;

use App\Models\Admin\AdmissionType;
use App\Repositories\BaseRepository;

class AdmissionTypeRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'type'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return AdmissionType::class;
    }
}
