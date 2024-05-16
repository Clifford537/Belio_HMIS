<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Inpatient;
use App\Repositories\BaseRepository;

class InpatientRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'patient_id',
        'admission_date',
        'discharge_date',
        'ward',
        'room_number',
        'bed_number',
        'diagnosis',
        'treatment_plan'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Inpatient::class;
    }
}
