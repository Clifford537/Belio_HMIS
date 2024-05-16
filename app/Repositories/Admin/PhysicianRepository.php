<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Physician;
use App\Repositories\BaseRepository;

class PhysicianRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'first_name',
        'surname',
        'other_names',
        'specialty',
        'address',
        'clinic_hospital',
        'procedure_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Physician::class;
    }
}
