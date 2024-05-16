<?php

namespace App\Repositories\Admin;

use App\Models\Admin\WardType;
use App\Repositories\BaseRepository;

class WardTypeRepository extends BaseRepository
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
        return WardType::class;
    }
}
