<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Bed_Type;
use App\Repositories\BaseRepository;

class Bed_TypeRepository extends BaseRepository
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
        return Bed_Type::class;
    }
}
