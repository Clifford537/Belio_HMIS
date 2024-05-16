<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Theatre;
use App\Repositories\BaseRepository;

class TheatreRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'theatre_status',
        'location',
        'capacity',
        'equipment_id',
        'operation_schedules',
        'next_maintenance_date',
        'last_maintenance_date',
        'doctor_incharge'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Theatre::class;
    }
}
