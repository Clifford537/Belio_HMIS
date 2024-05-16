<?php

namespace App\Repositories\Admin;

use App\Models\Admin\RadiologyProcedure;
use App\Repositories\BaseRepository;

class RadiologyProcedureRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'patient_id',
        'procedure_code',
        'procedure_date',
        'description',
        'doctor_id',
        'radiologist_name',
        'procedure_notes',
        'procedure_results',
        'procedure_cost',
        'insurance_id',
        'procedure_location',
        'theatre_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return RadiologyProcedure::class;
    }
}
