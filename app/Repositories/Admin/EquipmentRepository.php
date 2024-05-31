<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Equipment;
use App\Repositories\BaseRepository;

class EquipmentRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'type',
        'serial_number',
        'manufacturer',
        'model',
        'purchase_date',
        'warranty_expiry_date',
        'location',
        'status',
        'last_maintenance_date',
        'next_maintenance_date',
        'cost',
        'notes',
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
