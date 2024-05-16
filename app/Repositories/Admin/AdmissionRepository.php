<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Admission;
use App\Repositories\BaseRepository;

class AdmissionRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'patient_id',
        'admission_date',
        'doctor_id',
        'reason_for_admission',
        'discharge_status',
        'admission_types_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Admission::class;
    }
}
