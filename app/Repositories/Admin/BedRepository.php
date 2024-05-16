<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Bed;
use App\Repositories\BaseRepository;

class BedRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'bed_number',
        'occupancy_status',
        'ward_id',
        'bed_type_id',
        'patient_id',
        'bedside_equipment',
        'created_id',
        'updated_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Bed::class;
    }
}
