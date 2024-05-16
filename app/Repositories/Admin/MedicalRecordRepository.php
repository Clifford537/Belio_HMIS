<?php

namespace App\Repositories\Admin;

use App\Models\Admin\MedicalRecord;
use App\Repositories\BaseRepository;

class MedicalRecordRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'visit_date',
        'medical_history',
        'diagnoses',
        'treatments',
        'lab_results',
        'imaging_studies',
        'progress_notes',
        'patient_id',
        'nurse_id',
        'doctor_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return MedicalRecord::class;
    }
}
