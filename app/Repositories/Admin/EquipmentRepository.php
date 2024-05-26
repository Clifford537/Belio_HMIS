<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Equipment;
use App\Repositories\BaseRepository;

class EquipmentRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'type',
        'laboratory_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Equipment::class;
    }
}
