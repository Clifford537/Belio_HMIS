<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Ward;
use App\Repositories\BaseRepository;

class WardRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'description',
        'ward_type_id',
        'capacity',
        'location',
        'status',
        'nurse_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Ward::class;
    }
}
